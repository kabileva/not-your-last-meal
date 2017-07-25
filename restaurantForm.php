<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';

include_once 'TEST-DATA.php';	

?>

<ul class="breadcrumb">
  <li><a href="main.php"><?php print($userCountry) ?></a></li>
  <li><a href="restaurants.php">Restaurants</a></li>
  <li><a href="restaurantForm.php">Add a restaurant</a></li>
</ul>

<h1>Register a restaurant</h1>
<title>Register a restaurant</title>

<form id="formRes" name="resForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">

    <fieldset>
        <legend>Name</legend>
        <input type="text" name="name"> <span id="nameSp" class="required"></span>
    </fieldset>

    <fieldset>
        <legend>Country</legend>
        <select name="country">
              <option value="argentina">Argentina</option>
              <option value="kazakhstan">Kazakhstan</option>
              <option value="norway">Norway</option>
              <option value="republic of Korea">Republic of Korea</option>
        </select>
    </fieldset>

    <fieldset>
        <legend>Location</legend>
        <input type="text" name="location"> <span id="locaSp" class="required"></span>
    </fieldset>

    <fieldset>
        <legend>Type</legend>
        <select name="type">
            <option value="cafe">Cafe</option>
            <option value="restaurant">Restaurant</option>
            <option value="bar">Bar</option>
        </select>
    </fieldset>

    <fieldset>
        <legend>Presentation</legend>
        <textarea name="message" rows="8" cols="60">Present the restaurant.
        </textarea>
    </fieldset>

    <fieldset>
        <legend>Image</legend>
        <input type="file" name="image" id="image"> <span id="imageSp" class="required"></span>
    </fieldset>

    <fieldset>
        <legend>Does the restaurant have informative menues?</legend>
        <input type="radio" name="is_menu_friendly" value="Yes">Yes
        <input type="radio" name="is_menu_friendly" value="No">No
        <span id="menufSp" class="required"></span><br>
    </fieldset>

    <fieldset>
        <legend>What alergens does the restaurant has optional food for?</legend>
        <p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
        <?php
        //php script for listing all the ingredients

        echo '<select name="Allergens[]" multiple>';
        $ingredients = listItems($link, 'Ingredients', 'IngredientName');
        foreach ($ingredients as $ingredient) {
        echo  '<option value=' . $ingredient['IngredientName'] .'>' .$ingredient['IngredientName']. '</option>';
        }
        echo '</select>';
        ?>

        <span id="alerfSp" class="required"></span>
    </fieldset>

    <fieldset>
    <input class="restobutton" type="submit" value="Confirm"> <input class="restobutton" type="reset" value="Clear">
    </fieldset>

</form>

<!--action must be modified-->
<script>
    function validateForm(){

        var name=document.forms["resForm"]["name"].value;
        var location=document.forms["resForm"]["location"].value;
        var is_menu_friendly=document.forms["resForm"]["is_menu_friendly"].value;
        var is_alergen_friendly=document.forms["resForm"]["is_alergen_friendly"].value;
        var image=document.forms["resForm"]["image"].value;
        var count= 0;


        if((name=="")||(is_menu_friendly=="")||(is_alergen_friendly=="")||(location=="")||(image=="")){

            if(name==""){
                document.getElementById("nameSp").innerHTML="Required area";
            }

            if(location==""){
                document.getElementById("locaSp").innerHTML="Required area";
            }

            if(is_menu_friendly==""){
                document.getElementById("menufSp").innerHTML="Required area";
            }

            if(is_alergen_friendly==""){
                document.getElementById("alerfSp").innerHTML="Required area";
            }

            if(image==""){
                document.getElementById("imageSp").innerHTML="Required area";
            }
            count++;
        }




        if(count==0)
            return true;
        else
            return false;
    }

</script>
