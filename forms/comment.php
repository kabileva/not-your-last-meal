<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
.time {font-size: 7px;}
.user{font-size: 20px;}
a:link {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: green;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}

</style>
</head>
<body>

<?php

$comment="";
$commentErr= "";
$username="username";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comment"])) {
    $comment="";
    $commentErr= "comment is required";
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
  Comment:<br> <textarea name="comment" rows="2" cols="50"><?php echo $comment;?>  </textarea>
<span class="error"><?php echo $commentErr;?></span>

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