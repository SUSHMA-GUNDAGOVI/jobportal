<!DOCTYPE html>
<html>
<head>
  <title>Available Jobs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4">📄 Available Jobs</h2>

  <?php
  include 'db_connect.php'; // make sure you include DB connection

  $query = $conn->query("SELECT * FROM jobs  ORDER BY posted_date DESC");
  while ($row = $query->fetch_assoc()):
  ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h5 class="card-title text-primary"><?php echo $row['title1']; ?></h5>
        <p class="card-text"><?php echo $row['description']; ?></p>
        <div class="row text-muted mb-2">
          <div class="col-md-4"><strong>Salary:</strong> ₹<?php echo $row['salary']; ?></div>
          <div class="col-md-4"><strong>Duration:</strong> <?php echo $row['duration']; ?></div>
          <div class="col-md-4"><strong>Shift:</strong> <?php echo $row['shift']; ?></div>
          <div class="col-md-4"><strong>Location:</strong> <?php echo $row['location']; ?></div>
          <div class="col-md-4"><strong>Posted:</strong> <?php echo date('M j, Y', strtotime($row['posted_date'])); ?></div>
        </div>
        <button class="btn btn-success btn-sm apply-btn"
        data-id="<?php echo $row['id']; ?>"
        data-job-id="<?php echo $row['job_id']; ?>">
  Apply Now
</button>
      </div>
    </div>
  <?php endwhile; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Application Response</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="applyResponse">
        <!-- AJAX content here -->
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AJAX Logic -->
<script>
  $(document).ready(function () {
    $(".apply-btn").click(function () {
  const id = $(this).data("id");
  const jobId = $(this).data("job-id");

  $.ajax({
    url: "apply_jobs.php",
    method: "POST",
    data: { id: id },
    success: function (response) {
      $("#applyResponse").html(response);
      $("#applyModal").modal("show");

      // Set the job ID inside the form
      setTimeout(function () {
        $('#job_id').val(jobId);
      }, 100); // slight delay to ensure modal content is loaded
    }
  });
});

  });
</script>
</body>
</html>
