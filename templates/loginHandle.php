<?php

	// LOGIN USER
	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		$username = $_POST['username'];
		$password = $_POST['password'];


		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {

      $conn = new mysqli('localhost','root', 'root', 'id2305220_data');

      // Check connection
      if (!$conn) {
          die("Connection failed: "  . mysqli_connect_error());
      }
      //Password, UserName, Email, Image, Presentation, CountryName
      $sql = "SELECT *
                FROM Users LEFT JOIN Countries
                ON Users.CountryID = Countries.CountryID
                WHERE username='$username' AND password='$password'";

      $result = mysqli_query($conn, $sql);
		  $row = mysqli_fetch_assoc($result);

			if (mysqli_num_rows($result) > 0) {
        session_start();

        $_SESSION['userName'] = $row['UserName'];
        $_SESSION['userID'] = $row['UserID'];
        $_SESSION['userCountry'] = $row['CountryID'];
        $_SESSION['selectedCountry'] = $row['CountryID'];

        $_SESSION['selectedCountry'] = $row['CountryID'];
        $_SESSION['userImage'] = $row['Image'];

				header('location: ../main.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
