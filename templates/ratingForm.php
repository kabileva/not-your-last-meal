<html>
<head>
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


<h1>Star rating:</h1><br>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<input type="radio" name="star" value="0">☆☆☆☆☆
<input type="radio" name="star" value="1">★☆☆☆☆
<input type="radio" name="star" value="2">★★☆☆☆
<input type="radio" name="star" value="3">★★★☆☆
<input type="radio" name="star" value="4">★★★★☆
<input type="radio" name="star" value="5">★★★★★
<br><?php echo $starErr;?></span>
<br><br>
</fieldset>
<fieldset>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>

</body>
</html>
