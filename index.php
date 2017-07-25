<!DOCTYPE HTML>

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width">
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/forms.css">
   <link href="https://fonts.googleapis.com/css?family=Quicksand:300,700" rel="stylesheet">
</head>

<title>Not your last meal</title>
<body>
   <div id="main_logo">
      <img src="img/logo.svg" alt="Not your last meal">
   </div>
   <h2 style="text-align: center;">Your guide to allergy safe food when traveling!</h2>
   <div class="login-wrapper">
      <div class="form">
         <h3 class="title">Log in</h3>
      	 <?php require_once 'templates/loginForm.php'; ?>
      </div>
      <div class="form">
         <h3 class="title">Register</h3>
         <?php require_once 'templates/registerForm.php'; ?>
      </div>
   </div>
</body>
