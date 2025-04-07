<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="#">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables
                </a>
            </li>
        </ol>
    </nav>
    <!-- /.breadcrumb -->
    <div class="row ">
        <div class="col-6">
            <!-- title -->
            <h1 class="page-title">View All Applications</h1>
            <!-- <p class="text-muted">Resize your browser window to see it in action.</p> -->
        </div>

       

    </div>

</header>
<!-- /.page-title-bar -->

<!-- .page-section -->
<div class="page-section">
    <!-- .card -->
    <div class="card card-fluid">
        <!-- .card-body -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <div class="dataTables_length" id="dt-responsive_length" style="display: flex; align-items: center; gap: 10px;">
                        Show
                        <label for="entriesSelector">
                            <select name="dt-responsive_length" aria-controls="dt-responsive" class="custom-select" id="entriesSelector" onchange="updateEntries()">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </label>
                        entries
                    </div>
                </div>

                <div class="col-md-2">
                    <div id="dt-responsive_filter" class="dataTables_filter">
                        <label>Search:
                            <input type="search" class="form-control" placeholder="Type to search" aria-controls="dt-responsive" onkeyup="filterTable()" id="searchInput">
                        </label>
                    </div>
                </div>

                <table class="table dt-responsive nowrap w-100" id="dataTable">
                    <thead>
                        <tr>
                            <th>
                                Sl No.<i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>
                            <th>
                                Full Name <i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>
                            <th>
                                Applied For <i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>

                            <th>
                                Description <i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>
                                <th>
                                Duration <i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>
                                <th>
                                Shift <i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>
                                <th>
                                Location <i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>
                                <th>
                                Application Status <i class="fa fa-sort" aria-hidden="true" style="color: #bebaba;"></i></th>
                                <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$i = 1;
$qry = $conn->query("SELECT a.*, j.title1, j.description, j.duration, j.shift, j.location
                     FROM apply_jobs a 
                     INNER JOIN jobs j ON a.job_id = j.job_id");

$sl_no = 1;
while ($row = $qry->fetch_assoc()):
?>
<tr>
  <td><?php echo $sl_no++; ?></td>
  <td><?php echo $row['fname']; ?></td>
  <td><?php echo $row['title1']; ?></td>
  <td><?php echo $row['description']; ?></td>
  <td><?php echo $row['duration']; ?></td>
  <td><?php echo $row['shift']; ?></td> <!-- Job Title from jobs table -->
  <td><?php echo $row['location']; ?></td> <!-- Job Description -->
  <td>
  
  <form method="POST" class="status-form d-flex align-items-center">
    <input type="hidden" name="job_id" value="<?php echo $row['job_id']; ?>">
    <input type="hidden" name="fname" value="<?php echo $row['fname']; ?>">

    <select name="status" class="form-control mr-2" style="width: 130px;">
        <option value="Pending" <?php if ($row['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
        <option value="Accepted" <?php if ($row['status'] == 'Accepted') echo 'selected'; ?>>Accepted</option>
        <option value="Rejected" <?php if ($row['status'] == 'Rejected') echo 'selected'; ?>>Rejected</option>
    </select>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<td>
<a href="view_resume.php?id=<?php echo $row['id']; ?>&resume=<?php echo urlencode(basename($row['resume'])); ?>" target="_blank">
  View Resume
</a>

  </td>
</tr>
<?php endwhile; ?>

                    </tbody>
                </table>

            </div>

            <div class="row align-items-center">
                <div class="col-6">
                    <div class="dataTables_info" id="dt-responsive_info" role="status" aria-live="polite">
                        Showing <span id="startEntry">1</span> to <span id="endEntry">5</span> of <span id="totalEntries">0</span> entries
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end" id="updateEntries">
                    <div class="dataTables_paginate paging_simple_numbers" id="dt-responsive_paginate">
                        <ul class="pagination justify-content-center">
                            <!-- Pagination will be dynamically updated -->
                        </ul>
                    </div>
                </div>
            </div>



            <script>
                function filterTable() {
                    const input = document.getElementById('searchInput');
                    const filter = input.value.toLowerCase();
                    const table = document.getElementById('dataTable');
                    const rows = table.getElementsByTagName('tr');

                    // Filter rows based on input
                    let visibleRows = [];
                    for (let i = 1; i < rows.length; i++) { // Skip header row
                        const cells = rows[i].getElementsByTagName('td');
                        let isMatch = false;

                        for (let j = 0; j < cells.length; j++) {
                            if (cells[j]) {
                                const cellValue = cells[j].textContent || cells[j].innerText;
                                if (cellValue.toLowerCase().indexOf(filter) > -1) {
                                    isMatch = true;
                                    break;
                                }
                            }
                        }
                        if (isMatch) {
                            rows[i].style.display = '';
                            visibleRows.push(rows[i]);
                        } else {
                            rows[i].style.display = 'none';
                        }
                    }

                    // Update pagination with filtered rows
                    updateEntries(visibleRows);
                }

                function updateEntries(filteredRows = null) {
                    const selector = document.getElementById('entriesSelector');
                    const maxRows = parseInt(selector.value);
                    const table = document.getElementById('dataTable');
                    const rows = filteredRows || Array.from(table.getElementsByTagName('tr')).slice(1); // Skip header row
                    const totalRows = rows.length;
                    const totalPages = Math.ceil(totalRows / maxRows);
                    const pagination = document.querySelector('.pagination');

                    // Hide all rows and show only for the current page
                    rows.forEach((row, index) => {
                        row.style.display = (index < maxRows) ? '' : 'none';
                    });

                    // Update pagination buttons
                    pagination.innerHTML = '';

                    for (let i = 1; i <= totalPages; i++) {
                        const pageItem = document.createElement('li');
                        pageItem.className = `paginate_button page-item ${i === 1 ? 'active' : ''}`;
                        pageItem.innerHTML = `<a href="#" class="page-link" onclick="goToPage(${i}, ${maxRows}, ${totalRows})">${i}</a>`;
                        pagination.appendChild(pageItem);
                    }
                }

                function goToPage(pageNumber, maxRows, totalRows) {
                    const table = document.getElementById('dataTable');
                    const rows = Array.from(table.getElementsByTagName('tr')).slice(1); // Skip header row

                    // Show rows for the selected page
                    rows.forEach((row, index) => {
                        row.style.display =
                            index >= (pageNumber - 1) * maxRows && index < pageNumber * maxRows ?
                            '' :
                            'none';
                    });

                    // Update pagination active state
                    const pagination = document.querySelector('.pagination');
                    const pageItems = pagination.getElementsByTagName('li');
                    Array.from(pageItems).forEach((item, index) => {
                        item.className = `paginate_button page-item ${index === pageNumber - 1 ? 'active' : ''}`;
                    });

                    // Update the visible range information
                    const startEntry = Math.min((pageNumber - 1) * maxRows + 1, totalRows);
                    const endEntry = Math.min(pageNumber * maxRows, totalRows);
                    document.getElementById('startEntry').textContent = startEntry;
                    document.getElementById('endEntry').textContent = endEntry;
                    document.getElementById('totalEntries').textContent = totalRows;
                }

                window.onload = () => updateEntries();
            </script>

            <style>
                #dt-responsive th,
                #dt-responsive td {
                    word-wrap: break-word;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }


                #dt-responsive {
                    table-layout: fixed;
                }

                table.dataTable thead th {
                    position: relative;
                    padding-left: 20px;
                    /* Add space for the icon */
                }

                table.dataTable thead th:before {
                    content: '\25B2';
                    /* Up arrow for sorting */
                    position: absolute;
                    left: 5px;
                    /* Position icon on the left */
                    top: 50%;
                    transform: translateY(-50%);
                    opacity: 0;
                    /* Hidden by default */
                    transition: opacity 0.2s ease;
                }

                table.dataTable thead th.sorting:before {
                    opacity: 0.4;
                    /* Show icon for unsorted column */
                }

                table.dataTable thead th.sorting_asc:before {
                    content: '\25B2';
                    /* Up arrow */
                    opacity: 1;
                }

                table.dataTable thead th.sorting_desc:before {
                    content: '\25BC';
                    /* Down arrow */
                    opacity: 1;
                }
            </style>


            <!-- /.table -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.page-section -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#dt-responsive').DataTable({
            searching: true, // Enable the search box
            paging: true, // Enable pagination
            info: true, // Show table info
            responsive: true // Make it responsive
        });
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#dt-responsive').DataTable();

        // Link external search input to DataTables search
        $('#dt-responsive_filter input').on('keyup', function() {
            table.search(this.value).draw();
        });
    });
</script>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.css" />





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Set initial sorting order (ascending)
        let sortOrder = 'asc'; // Default sorting order

        // Function to sort table rows
        function sortTable(index, order) {
            var rows = $('#dataTable tbody tr').get();

            rows.sort(function(a, b) {
                var A = $(a).children('td').eq(index).text().toUpperCase();
                var B = $(b).children('td').eq(index).text().toUpperCase();

                if (order === 'asc') {
                    return (A < B) ? -1 : (A > B) ? 1 : 0;
                } else {
                    return (A < B) ? 1 : (A > B) ? -1 : 0;
                }
            });

            $.each(rows, function(index, row) {
                $('#dataTable').children('tbody').append(row);
            });
        }

        // Add sorting event on each header cell
        $('#dataTable thead th').each(function(index) {
            $(this).click(function() {
                // Toggle sorting order
                if (sortOrder === 'asc') {
                    sortOrder = 'desc';
                    $(this).find('i').removeClass('fa-sort').addClass('fa-sort-down'); // Show descending icon
                } else {
                    sortOrder = 'asc';
                    $(this).find('i').removeClass('fa-sort-down').addClass('fa-sort-up'); // Show ascending icon
                }

                // Sort table based on clicked column
                sortTable(index, sortOrder);
            });
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function () {
    $('.status-form').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        let form = $(this); // This particular form
        let formData = new FormData(this);

        $.ajax({
            url: 'ajax.php?action=update_status', // Backend PHP file
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.trim() === '1') {
                    toastr.success('Application status updated.');
                    setTimeout(function () {
                        location.reload(); // Refresh the page or you could update just this row
                    }, 1000);
                } else {
                    toastr.error('Failed to update status.');
                }
            },
            error: function () {
                toastr.error('Server error. Please try again later.');
            }
        });
    });
});

</script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.css" />