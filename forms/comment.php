<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php

$comment="";
$commentErr= "";
$username="username";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comment"])) {
    $comment="";
    $commentErr= "*comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Comment&nbsp;&nbsp;<span class="error"><?php echo $commentErr;?></span>
  <br> <textarea name="comment" rows="2" cols="50"><?php echo $comment;?></textarea>

  </textarea>

  <input type="submit" name="submit" value="Submit">
</form>

<h2>comment:</h2>


<span class = "user">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["comment"]))
  {
      echo "<a href='http://localhost/mine/userprofile.html'; target='_blank';>".$username."</a>" . "       ";
  }
}
?>
</span>

<?php
echo $comment;
?>

<span class = "time">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["comment"]))
      {
      echo "  " . date("h:i:a") . "  " . date("Y-m-d");
      }
}
?>

</span>
</body>
</html>
