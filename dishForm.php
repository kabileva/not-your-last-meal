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
      <span id="titleSp"></span>
  </fieldset>
  <br><br>

  <fieldset>
    <legend>Type</legend>
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
    <legend>Allergens</legend>
  <p style="font-size: 12px">Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
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
</fieldset>
  <br><br>

  <fieldset>
  <legend>Image upload</legend>
  <br>
  <input type="file" name="image" id="image">
<span id="imageSp"></span>
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
