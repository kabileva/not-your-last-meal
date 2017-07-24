<html>
<head>
<style>
.aaa{font-size: 20px;}
.error {color: #FF0000;}
</style>
</head>

<body>

  <?php
  // define variables and set to empty values
  $starErr = "";
  $star = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["star"])) {
      $starErr = "rating is required";
    } else {
      $star = test_input($_POST["star"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>


<b>Star rating:</b><br>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="aaa">
<input type="radio" name="star" value="0">☆☆☆☆☆
<input type="radio" name="star" value="1">★☆☆☆☆
<input type="radio" name="star" value="2">★★☆☆☆
<input type="radio" name="star" value="3">★★★☆☆
<input type="radio" name="star" value="4">★★★★☆
<input type="radio" name="star" value="5">★★★★★
</div>
<span class="error"><br><?php echo $starErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
