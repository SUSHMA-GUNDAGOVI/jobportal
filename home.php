<!-- Include dependencies -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<?php include('db_connect.php'); ?>
<?php
$twhere = "";
if ($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>

<div class="container mt-4">

  <?php if ($_SESSION['login_type'] == 1): ?>
    <div class="row mb-4">
      <div class="col-12">
        <h3 class="mb-0">👋 Hi, <strong><?php echo $_SESSION['login_name'] ?></strong></h3>
        <p class="text-muted">Welcome to your Job Seeker Dashboard</p>
      </div>
    </div>

    <!-- Cards Section -->
    <div class="row">
      <!-- View Jobs -->
      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <i class="fas fa-briefcase fa-3x text-primary mb-3"></i>
            <h5 class="card-title">Browse Jobs</h5>
            <p class="card-text text-muted">Check the latest job listings and apply now.</p>
            <a href="view_jobs.php" class="btn btn-outline-primary btn-sm">View Jobs</a>
          </div>
        </div>
      </div>


      <!-- Application Status -->
      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <i class="fas fa-tasks fa-3x text-info mb-3"></i>
            <h5 class="card-title">Application Status</h5>
            <p class="card-text text-muted">See the status of your job applications.</p>
            <a href="./index.php?page=check_application" class="btn btn-outline-info btn-sm">View Status</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Chart Section -->
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-white font-weight-bold">Application Overview</div>
          <div class="card-body">
            <canvas id="applicationChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Chart.js Script -->
    <script>
      const ctx = document.getElementById('applicationChart').getContext('2d');
      const applicationChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['Pending', 'Accepted', 'Rejected'],
          datasets: [{
            label: 'Applications',
            data: [5, 2, 3], // Replace with PHP variables if needed
            backgroundColor: ['#ffc107', '#28a745', '#dc3545'],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });
    </script>
  <?php endif; ?>
</div>


<?php if ($_SESSION['login_type'] == 2): ?>
<div class="col-12 mb-4">
  <p class="lead">
    <span class="font-weight-bold">Hey, <?php echo $_SESSION['login_name']; ?></span>
    <span class="d-block text-muted">Here’s an overview of your job creation and applications today.</span>
  </p>
</div>

<div class="row g-4">
  <?php
    $today = date('Y/m/d');

    // Count today's created jobs
    $today_created_jobs = 0;
    $result = $conn->query("SELECT dt FROM jobs");
    while ($row = $result->fetch_assoc()) {
        if (date('Y/m/d', strtotime($row['dt'])) == $today) {
            $today_created_jobs++;
        }
    }

    // Total jobs created
    $total_created_jobs = $conn->query("SELECT * FROM jobs")->num_rows;

    // Count today's applied jobs
    $today_applied_jobs = 0;
    $result = $conn->query("SELECT dt FROM apply_jobs");
    while ($row = $result->fetch_assoc()) {
        if (date('Y/m/d', strtotime($row['dt'])) == $today) {
            $today_applied_jobs++;
        }
    }

    // Total applications
    $total_applied_jobs = $conn->query("SELECT * FROM apply_jobs")->num_rows;
  ?>

  <!-- Today Created Jobs -->
  <div class="col-md-3">
    <div class="card shadow border-0" style="background-color: #e3f2fd;">
      <div class="card-body text-center">
        <div class="text-primary mb-2"><i class="fas fa-briefcase fa-2x"></i></div>
        <h3 class="mb-1"><?php echo $today_created_jobs; ?></h3>
        <p class="text-muted mb-0">Jobs Created Today</p>
      </div>
    </div>
  </div>

  <!-- Total Created Jobs -->
  <div class="col-md-3">
    <div class="card shadow border-0" style="background-color: #e8f5e9;">
      <div class="card-body text-center">
        <div class="text-success mb-2"><i class="fas fa-list fa-2x"></i></div>
        <h3 class="mb-1"><?php echo $total_created_jobs; ?></h3>
        <p class="text-muted mb-0">Total Jobs Created</p>
      </div>
    </div>
  </div>

  <!-- Today Applied Jobs -->
  <div class="col-md-3">
    <div class="card shadow border-0" style="background-color: #fff8e1;">
      <div class="card-body text-center">
        <div class="text-warning mb-2"><i class="fas fa-paper-plane fa-2x"></i></div>
        <h3 class="mb-1"><?php echo $today_applied_jobs; ?></h3>
        <p class="text-muted mb-0">Jobs Applied Today</p>
      </div>
    </div>
  </div>

  <!-- Total Applied Jobs -->
  <div class="col-md-3">
    <div class="card shadow border-0" style="background-color: #ffebee;">
      <div class="card-body text-center">
        <div class="text-danger mb-2"><i class="fas fa-check-circle fa-2x"></i></div>
        <h3 class="mb-1"><?php echo $total_applied_jobs; ?></h3>
        <p class="text-muted mb-0">Total Applications</p>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


 
 
 
    