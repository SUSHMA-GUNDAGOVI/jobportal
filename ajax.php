<?php
ob_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}

if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}

if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}

if($action == 'update_user'){
	$save = $crud->update_user();
	if($save)
		echo $save;
}
if($action == 'save_system_settings'){
	$save = $crud->save_system_settings();
	if($save)
		echo $save;
}
if($action == 'save_jobs'){
	$save = $crud->save_jobs();
	if($save)
		echo $save;
}

if($action == 'delete_jobs'){
	$save = $crud->delete_jobs();
	if($save)
		echo $save;
}
if($action == 'save_apply_jobs'){
	$save = $crud->save_apply_jobs();
	if($save)
		echo $save;
}

if($action == 'update_status'){
	$save = $crud->update_status();
	if($save)
		echo $save;
}


?>
