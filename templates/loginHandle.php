<?php


	// LOGIN USER
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "we are in post ";
    //include_once("../db/db_init.php");
		$username = $_POST['username'];
		$password = $_POST['password'];
		/*$username2 = stripcslashes($username);
	  $password2 = stripcslashes($password);
	  $username = mysqli_real_escape_string($username);
	  $password = mysqli_real_escape_string($password);*/

    echo $username;
    echo "<br>";
    echo $password;

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
      echo "no errors ";
      $conn = new mysqli('localhost','root', 'root', 'id2305220_data');
      // Check connection
      if (!$conn) {
          die("Connection failed: "  . mysqli_connect_error());
      }
      //$link = mysqli_connect('localhost', 'root', 'root');
      //$db = mysqli_select_db($link, 'id2305220_data');
			$sql = "SELECT Password, UserName, Email, Image, Presentation, countryName
                FROM users LEFT JOIN countries
                ON users.CountryID = countries.CountryID
                WHERE username='$username' AND password='$password'";

      $result = mysqli_query($conn, $sql);

      echo "hey you are in no errors";
		  $row = mysqli_fetch_assoc($result);

			if (mysqli_num_rows($result) > 0) {
        session_start();
        //header('location: ../dishForm.php');
        $_SESSION['userName'] = $row['userName'];
        $_SESSION['userCountry'] = $row['countryName'];
        $_SESSION['userImage'] = $row['Image'];

				header('location: ../main.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
