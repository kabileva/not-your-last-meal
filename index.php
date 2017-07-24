<!DOCTYPE HTML>
<?php

include_once 'templates/head.php';
   
?>

<title>Not your last meal</title>
<body>
   <div id="main_logo">
      <img src="img/logo.svg" alt="Not your last meal">
   </div>
   <h2 style="text-align: center;">Your guide to allergy safe food when traveling!</h2>
   <div class="login-wrapper">
      <div class="form">
         <h3 class="title">Log in</h3>
         <?php include_once 'forms/login.php'?>
      </div>
      <div class="form">
         <h3 class="title">Register</h3>
         <?php include_once 'forms/register.php'?>
      </div>
   </div>
</body>
