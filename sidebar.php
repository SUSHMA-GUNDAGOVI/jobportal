<!-- .aside-menu -->
<div class="aside-menu overflow-hidden">
  <a href="./" class="brand-link">
    <?php if ($_SESSION['login_type'] == 1): ?>

      <h3 class="text-center p-0 m-0"><b></b></h3>
    <?php endif; ?>
    <?php if ($_SESSION['login_type'] == 2): ?>
      <h3 class="text-center p-0 m-0"><b></b></h3>
    <?php endif; ?>

  </a>
  <!-- .stacked-menu -->
  <nav id="stacked-menu" class="stacked-menu">
    <!-- .menu -->
    <ul class="menu">
      <!-- .menu-item -->
      <li class="menu-item has-active">
        <a href="./index.php?page=home" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
      </li><!-- /.menu-item -->
      <!-- .menu-item -->
      <?php if ($_SESSION['login_type'] == 1): ?>


   <li class="menu-item has-child">
          <a href="#" class="menu-link nav-customer">
            <span class="menu-icon oi oi-puzzle-piece"></span>
            <span class="menu-text">Browse Jobs</span>
          </a>
          <ul class="menu nav-customer-list">
            <li class="menu-item">
              <a href="./index.php?page=view_jobs" class="menu-link">View Jobs</a>
            </li>
          
          </ul>
          </li>

        <li class="menu-item has-child">
          <a href="#" class="menu-link nav-customer">
            <span class="menu-icon nav-icon fas fa-user"></span>
            <span class="menu-text">Check Application Status</span>
          </a>
          <ul class="menu nav-customer-list">
            <li class="menu-item">
              <a href="./index.php?page=check_application" class="menu-link">Application Status</a>
            </li>
          </ul>
        </li>    
          <?php endif; ?>


      <?php if ($_SESSION['login_type'] == 2): ?>
            <li class="menu-item has-child">
       <a href="#" class="menu-link nav-customer">
         <span class="menu-icon oi oi-puzzle-piece"></span>
         <span class="menu-text">Create Jobs</span>
       </a>
       <ul class="menu nav-customer-list">
         <li class="menu-item">
           <a href="./index.php?page=create_job_list" class="menu-link">New Job</a>
         </li>
       </ul>
       </li>

      
        <li class="menu-item has-child">
          <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">View All Applications</span> <span class="badge badge-warning"></span></a> <!-- child menu -->
          <ul class="menu">
            <li class="menu-item">
              <a href="./index.php?page=view_application" class="menu-link">View</a>
            </li>
          <?php endif; ?>


          <!-- .menu-item -->
          </ul><!-- /child menu -->
        </li><!-- /.menu-item -->
    </ul><!-- /.menu -->
  </nav><!-- /.stacked-menu -->
</div><!-- /.aside-menu -->
<!-- Skin changer -->

<footer class="aside-footer border-top p-2">
  <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
</footer><!-- /Skin changer -->
</div><!-- /.aside-content -->
</aside><!-- /.app-aside -->
<!-- .app-main -->
<main class="app-main">
  <!-- .wrapper -->
  <div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">
        <!-- .page-title-bar -->