<header class="page-title-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="#">
                        <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables
                    </a>
                </li>
                
            </ol>
        </nav>
          
                <div class="d-md-flex align-items-md-start">
                  <h1 class="page-title mr-sm-auto">Add New Job</h1><!-- .btn-toolbar -->
                  <div class="btn-toolbar">
                    

    </header>

    <?php
$query = "select job_id from jobs order by job_id desc";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$lastid = $row['job_id'] ?? null;
if (empty($lastid)) {
  $number = "JOB01";
} else {
  $idd = str_replace("JOB", "", $lastid);
  $id1 = str_pad($idd + 1, 2, 0, STR_PAD_LEFT);
  $number = 'JOB' . $id1;
}

?>

<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
            <form id="addClientForm">
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
                    <div class="modal-body">
                      <div class="row">
                     
 
  <input type="hidden" name="job_id" id="job_id" cols="30" rows="2" class="form-control" value="<?php echo isset($number) ?  $number  : '' ?>" readonly>


                      <div class="col-sm-6 form-group ">
                     <label for="" class="control-label">Job Title</label>
                     <input type="text" name="title1" id="title1" cols="30" rows="2" class="form-control" value="<?php echo isset($title1) ?  $title1  : '' ?>">
                
                     </div>
                        <div class="col-sm-6 form-group">
                            <label for="name">Description</label>
                            <input type="text" id="description" name="description" class="form-control" value="<?php echo isset($description) ?  $description  : '' ?>" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="fname">Salary</label>
                            <input type="text" id="salary" name="salary" class="form-control" value="<?php echo isset($salary) ?  $salary  : '' ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="gender">Duration</label>
                            <input type="text" id="duration" name="duration" class="form-control" value="<?php echo isset($duration) ?  $duration  : '' ?>" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="mstatus">Shift</label>
                            <input type="text" id="shift" name="shift" class="form-control" value="<?php echo isset($shift) ?  $shift  : '' ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Location</label>
                            <input type="text" id="location" name="location" class="form-control" value="<?php echo isset($location) ?  $location  : '' ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Posted Date</label>
                            <input type="date" id="posted_date" name="posted_date" class="form-control" value="<?php echo isset($posted_date) ?  $posted_date  : '' ?>" required>
                        </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="addClientForm">Save</button>
                        <a href="./index.php?page=create_job_list" class="btn btn-secondary">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        $('#addClientForm').submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this);

            $.ajax({
                url: 'ajax.php?action=save_jobs', // Backend PHP file
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.trim() === '1') {
                        toastr.success('New job successfully added.');
                        setTimeout(function () {
                            window.location.href = 'index.php?page=create_job_list';
                        }, 2000);
                    } else {
                        toastr.error('Failed to add job. Please try again.');
                    }
                },
                error: function () {
                    toastr.error('Server error. Please check your PHP backend.');
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