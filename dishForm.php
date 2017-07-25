<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';

include_once 'TEST-DATA.php';

?>

<ul class="breadcrumb">
  <li><a href="main.php"><?php print($userCountry) ?></a></li>
  <li><a href="dishes.php">Dishes</a></li>
  <li><a href="dishForm.php">Add a dish</a></li>
</ul>

<script>
    function validateForm(){

        var title=document.forms["dishForm"]["title"].value;
        var image=document.forms["dishForm"]["image"].value;
        var breakfast=document.forms["dishForm"]["breakfast"].checked;
        var lunch=document.forms["dishForm"]["lunch"].checked;
        var dinner=document.forms["dishForm"]["dinner"].checked;
        var brunch=document.forms["dishForm"]["brunch"].checked;
        var dessert=document.forms["dishForm"]["dessert"].checked;

        var count= 0;

        if((title=="")||(image=="")){

            if(title==""){
                document.getElementById("titleSp").innerHTML="Required area";
            }

            if(image==""){
                document.getElementById("imageSp").innerHTML="Required area";
            }
            count++;
        }
   
            if((brunch=="")&&(breakfast=="")&&(lunch=="")&&(dinner=="")&&(dessert==""))
       {

          count++;

           document.getElementById("typeSp").innerHTML="Required area";
       }


        if(count==0)
            return true;
        else
            return false;
    }

</script>


<h1>Add a dish</h1>
<title>Add a dish</title>

<form name="dishForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
  <fieldset>
    <legend>Title</legend>
    <input type="text" name="title" size="60">
      <span id="titleSp" class="required"></span>
  </fieldset>
  <br><br>

  <fieldset>
    <legend>Type</legend>
  <br>
  <input type="checkbox" name="breakfast" value="breakfast" >breakfast
  <input type="checkbox" name="lunch" value="lunch" >lunch
  <input type="checkbox" name="dinner" value="dinner" >dinner
  <input type="checkbox" name="brunch" value="brunch" >brunch
  <input type="checkbox" name="dessert" value="dessert">dessert
<br><span id="typeSp" class="required"></span>
  <br><br>
  </fieldset>

  <fieldset>
    <legend>Country</legend>
    <?php
        // //php script for listing all the countries
        require_once("db/db_init.php");
        require("db/db_functions.php");
        $countries = listItems($link, 'Countries');
        echo '<select name="country">';
        foreach ($countries as $country) {
        echo '<option value=' . $country['CountryID'] . '>' . $country['CountryName'] . '</option>';
        }
        echo '</select>';
        ?>
  <br><br>
</fieldset>

  <fieldset>
    <legend>Ingredients</legend>
        <p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
        <?php
        //php script for listing all the ingredients

        echo '<select name="Allergens[]" multiple>';
        $ingredients = listItems($link, 'Ingredients');
        foreach ($ingredients as $ingredient) {
        echo  '<option value=' . $ingredient['IngredientID'] .'>' .$ingredient['IngredientName']. '</option>';
        }
        echo '</select>';
        ?>
</fieldset>
  <br><br>

  <fieldset>
  <legend>Image upload</legend>
  <br>
  <input type="file" name="image" id="image">
<span id="imageSp" class="required"></span>
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
