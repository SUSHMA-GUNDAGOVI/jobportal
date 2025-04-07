<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('./db_connect.php');
ob_start();
// if(!isset($_SESSION['system'])){

$system = $conn->query("SELECT * FROM system_settings")->fetch_array();
foreach ($system as $k => $v) {
  $_SESSION['system'][$k] = $v;
}
// }
ob_end_flush();
?>
<?php
if (isset($_SESSION['login_id']))
  header("location:index.php?page=home");
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
  <!-- Begin SEO tag -->
  <title> Sign In | Looper - Bootstrap 4 Admin Theme </title>
  <meta property="og:title" content="Sign In">
  <meta name="author" content="Beni Arisandi">
  <meta property="og:locale" content="en_US">
  <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
  <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
  <link rel="canonical" href="https://uselooper.com">
  <meta property="og:url" content="https://uselooper.com">
  <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
  <script type="application/ld+json">

  </script><!-- End SEO tag -->
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/favicon.ico">
  <meta name="theme-color" content="#3063A0"><!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
  <!-- BEGIN PLUGINS STYLES -->
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"><!-- END PLUGINS STYLES -->
  <!-- BEGIN THEME STYLES -->
  <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
  <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
  <link rel="stylesheet" href="assets/stylesheets/custom.css">
  <script>
    var skin = localStorage.getItem('skin') || 'default';
    var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
    // Disable unused skin immediately
    disabledSkinStylesheet.setAttribute('rel', '');
    disabledSkinStylesheet.setAttribute('disabled', true);
    // add flag class to html immediately
    if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
  </script><!-- END THEME STYLES -->
</head>

<body>
  <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
  <!-- .auth -->
  <main class="auth">
    <header id="auth-header" class="auth-header" style="background-image: url(assets/images/illustration/img-1.png);">
      <h1>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="64" viewbox="0 0 351 100">
          <defs>

          </defs>
          <g fill="none" fill-rule="evenodd">

            <use class="fill-warning" xlink:href="#a"></use>
          </g>
        </svg> <span class="sr-only">Sign In</span>
      </h1>

    </header><!-- form -->
    <form class="auth-form" id="login-form">
      <!-- .form-group -->
      <div class="form-group position-relative">
        <div class="form-group position-relative">
          <div class="form-label-group">
            <input
              type="email"
              id="email"
              name="email"
              class="form-control pr-5"
              placeholder="Email"
              autofocus
              required>
            <label for="email">Email</label>

           
            <span class="position-absolute mail-icon">
              <i class="fas fa-envelope"></i>
            </span>
          </div>
        </div>

        <style>
          
          .mail-icon {
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: default;
            z-index: 2;
            color: black;
            
          }
        </style>

        <div class="form-group position-relative">
          <div class="form-label-group">
            <input
              type="password"
              id="password"
              name="password"
              class="form-control pr-5"
              placeholder="Password"
              required>
            <label for="password">Password</label>

            <!-- Eye Icon -->
            <span
              class="position-absolute toggle-password-icon"
              onclick="togglePassword()">
              <i id="togglePasswordIcon" class="fas fa-eye"></i>
            </span>
          </div>
        </div>

        <style>
          .toggle-password-icon {
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 2;
          }
        </style>

        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember-me"> <label class="custom-control-label" for="remember-me">Keep me sign in</label>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <div class="text-center pt-3">
          <a href="auth-recovery-username.html" class="link">Forgot Username?</a> <span class="mx-2">·</span> <a href="auth-recovery-password.html" class="link">Forgot Password?</a>
        </div><!-- /recovery links -->
    </form><!-- /.auth-form -->

    <!-- copyright -->
   
  </main><!-- /.auth -->
  <!-- BEGIN BASE JS -->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // Define the start_load function
    function start_load() {
      $('#loader').show(); // Show the loading spinner
    }

    // Define the end_load function
    function end_load() {
      $('#loader').hide(); // Hide the loading spinner
    }

    $(document).ready(function() {

      $('#login-form').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting the default way
        start_load(); // Show the loader when the form is submitted

        if ($(this).find('.alert-danger').length > 0)
          $(this).find('.alert-danger').remove();

        $.ajax({
          url: 'ajax.php?action=login',
          method: 'POST',
          data: $(this).serialize(),
          error: function(err) {
            console.log(err); // Log any errors
            end_load(); // Hide the loader on error
          },
          success: function(resp) {
            if (resp == 1) {
              location.href = 'index.php?page=home'; // Redirect if login is successful
            } else {
              $('#login-form').prepend('<div class="alert" style="color: #721c24; background-color: #f8d7da; padding: 10px; border-radius: 5px; border: 1px solid #f5c6cb;">Username or password is incorrect.</div>');


              end_load(); // Hide the loader if login fails
            }
          }
        });
      });
    });
  </script>
  <script>
    function togglePassword() {
      const passwordField = document.getElementById('password');
      const toggleIcon = document.getElementById('togglePasswordIcon');

      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
      }
    }
  </script>



  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
  <!-- BEGIN PLUGINS JS -->
  <script src="assets/vendor/particles.js/particles.js"></script>
  <script>
    /**
     * Keep in mind that your scripts may not always be executed after the theme is completely ready,
     * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
     */
    $(document).on('theme:init', () => {
      /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
      particlesJS.load('auth-header', 'assets/javascript/pages/particles.json');
    })
  </script> <!-- END PLUGINS JS -->
  <!-- BEGIN THEME JS -->
  <script src="assets/javascript/theme.js"></script> <!-- END THEME JS -->
</body>

</html>