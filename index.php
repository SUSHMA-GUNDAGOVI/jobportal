
<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<?php 
	if(!isset($_SESSION['login_id']))
	    header('location:login.php');
    include 'db_connect.php';
    ob_start();
  if(!isset($_SESSION['system'])){

    $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
    foreach($system as $k => $v){
      $_SESSION['system'][$k] = $v;
    }
  }
  ob_end_flush();

  if (isset($_GET['msg'])) {
      $message = htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8');
      echo "<script>
          var message = '{$message}';
          window.onload = function() {
              alert(message);
          }
      </script>";
  }
	include 'header.php' ;
  include 'sidebar.php' ;
?>
<section class="content">

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    if (!file_exists($page . ".php")) {
      include '404.html';
    } else {
      include $page . '.php';
    }
    ?>

</section>

<?php

include 'footer.php';
?>