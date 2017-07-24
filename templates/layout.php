<?php

include_once 'head.php';

include_once 'top-bar.php';

session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: templates/loginForm.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: templates/loginForm.php");
}

?>
