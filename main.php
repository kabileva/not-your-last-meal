<?php

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

include_once 'templates/layout.php';

include_once 'templates/go-back.php';

?>
<!DOCTYPE HTML>
<html>
<title>Not your last meal</title>

<div id="main">
   <a href="info.html">
      <div class="dish">
         <h2>Name and picture</h2>
      </div>
   </a>
   <a href="info.html">
      <div class="dish">
         <h2>Name and picture</h2>
      </div>
   </a>
   <a href="info.html">
      <div class="dish">
         <h2>Name and picture</h2>
      </div>
   </a>
   <a href="info.html">
      <div class="dish">
         <h2>Name and picture</h2>
      </div>
   </a>
   <a href="restaurants.html">
      <div class="restaurants_link">
         <h2>Go to restaurants</h2>
      </div>
   </a>
</div>
</html>
