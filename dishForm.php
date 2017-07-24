<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';

include_once 'templates/go-back.php';		

// define variables and set to empty values
$titleErr = $countryErr = $typeErr = $allegicErr = $imageErr ="";
$title = $comment = $country = $type = $allegic = $image ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"])) {
    $titleErr = "title is required";
  } else {
    $title = test_input($_POST["title"]);
  }

  if (($_POST["country"])=="None") {
    $countryErr = "country is required";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (empty($_POST["allegic"])) {
    $allegicErr = "allergens is required";
  } else {
    $allegic = test_input($_POST["allegic"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["type"])) {
    $typeErr = "type is required";
  } else {
    $type = test_input($_POST["type"]);
  }

  if (empty($_POST["type"])) {
    $typeErr = "type is required";
  } else {
    $type = test_input($_POST["type"]);
  }

  if (empty($_POST["image"])) {
    $imageErr = "image is required";
  } else {
    $image = test_input($_POST["image"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Posting dish/ Editing</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>Title</legend><?php echo $titleErr;?></span><br>
    <input type="text" name="title" size="60">
  </fieldset>
  <br><br>

  <fieldset>
    <legend>Type</legend><?php echo $typeErr;?></span>
  <br>
  <input type="checkbox" name="type" value="breakfast" >breakfast
  <input type="checkbox" name="type" value="lunch" >lunch
  <input type="checkbox" name="type" value="dinner" >dinner
  <input type="checkbox" name="type" value="brunch" >brunch
  <input type="checkbox" name="type" value="dessert">dessert
  <br><br>
  </fieldset>

  <fieldset>
    <legend>Country</legend>
    <select name="country">
    <option value="Argentina">Argentina</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Norway">Norway</option>
    <option value="Republic of Korea">Republic of Korea</option>
    </select>
  <br><br>
</fieldset>

  <fieldset>
    <legend>Allergens<span>
  <span class="error"><?php echo $allegicErr;?></span>
  <p style="font-size: 12px">&nbsp;&nbsp;&nbsp;Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
  &nbsp;&nbsp;<select multiple name="allegic" >
  <option value="fruit">fruit</option>
  <option value="legumes">legumes</option>
  <option value="beans">beans</option>
  <option value="celery and celeriac">celery and celeriac</option>
  <option value="peas">peas</option>
  <option value="corn or maize">corn or maize</option>
  <option value="peanuts">peanuts</option>
  <option value="soybeans">soybeans</option>
  <option value="milk">milk</option>
  <option value="seafood">seafood</option>
  <option value="sesame">sesame</option>
  <option value="soy">soy</option>
  <option value="tree nuts">tree nuts</option>
  <option value="pecans">pecans</option>
  <option value="almonds">almonds</option>
  <option value="wheat">wheat</option>
  <option value="eggs (typically albumen, the white)">eggs (typically albumen, the white)</option>
  <option value="pumpkin, eggplant">pumpkin, eggplant</option>
  </select>
</fieldset>
  <br><br>

  <fieldset>
  <legend>Image upload</legend><?php echo $imageErr;?></span>
  <br>
  <input type="file" name="image" id="image">
  <br>
</fieldset>

  <fieldset>
  <legend>Ingredients and Information</legend>
  <textarea name="comment" rows="5" cols="47"></textarea>
  <br><br>
  </fieldset>

  <fieldset>
  <input type="submit" name="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>
