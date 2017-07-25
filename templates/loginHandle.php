<?php
  include_once("../db/db_init.php");
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

        // Some test sesssion variables
        $_SESSION['userName'] = 'TestUser';
        $_SESSION['userCountry'] = 'Argentina';
        $_SESSION['userImage'] = 'test-data/images/user1.jpg';

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username2 = stripcslashes($username);
	  $password2 = stripcslashes($password);
	  $username2 = mysqli_real_escape_string($username2);
	  $password2 = mysqli_real_escape_string($password2);


		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

		  $row = mysqli_fetch_array($results);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				//$_SESSION['success'] = "You are now logged in";
				header('location: ../main.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
