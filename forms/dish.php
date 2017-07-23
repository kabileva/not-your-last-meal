<!DOCTYPE HTML>
<?php
// define variables and set to empty values
$titleErr = $countryErr = $typeErr = $allegicErr = "";
$title = $comment = $country = $type = $allegic = "";

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
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="aaa">
<h2>Posting dish/ Editing</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Title<span class="error">*</span>
  <span class="error"><?php echo $titleErr;?></span>
  <br>
  <input type="text" name="title" size="60">
  <br><br>

  Type<span class="error">*</span>
  <span class="error"><?php echo $typeErr;?></span>
  <br>
  <input type="checkbox" name="type" value="breakfast" >breakfast
  <input type="checkbox" name="type" value="lunch" >lunch
  <input type="checkbox" name="type" value="dinner" >dinner
  <input type="checkbox" name="type" value="brunch" >brunch
  <input type="checkbox" name="type" value="dessert">dessert
  <br><br>

  Country<br>
  <select id="mySelect" name="country">
    <option value="Argentina">Argentina</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Norway">Norway</option>
    <option value="Republic of Korea">Republic of Korea</option>
  </select>
  <br><br>

  Allergens<span class="error">*</span>
  <span class="error"><?php echo $allegicErr;?></span>
  <p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
  <select multiple name="allegic" >
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
  <br><br>

  Image upload<br>
  <input type="file" name="image" id="image">
  <br><br>

  Ingredients and Information<br>
  <textarea name="comment" rows="5" cols="47"></textarea>
  <br><br>

  <input type="submit" name="submit" value="Submit" onclick="myFunction()">
</form>
