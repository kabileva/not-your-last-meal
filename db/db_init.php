<?php
if (get_magic_quotes_gpc())
{
  function stripslashes_deep($value)
  {
    $value = is_array($value) ?
        array_map('stripslashes_deep', $value) :
        stripslashes($value);

    return $value;
  }

  $_POST = array_map('stripslashes_deep', $_POST);
  $_GET = array_map('stripslashes_deep', $_GET);
  $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
  $_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}

$link = mysqli_connect('localhost', 'root', '951129');
if (!$link)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

if (!mysqli_set_charset($link, 'utf8'))
{
  $output = 'Unable to set database connection encoding.';
  include 'output.html.php';
  exit();
}

if (!mysqli_select_db($link, 'notlastmeal'))
{
  $error = 'Unable to locate the database.';
  include 'error.html.php';
  exit();
}

// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);

	if (empty($username)) {
		array_push($error, "Username is required");
	}
	if (empty($password)) {
		array_push($error, "Password is required");
	}

	if (count($error) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($link, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../main.php');
		}else {
			array_push($error, "Wrong username/password combination");
		}
	}
}

?>
