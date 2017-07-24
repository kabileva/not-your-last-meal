<!-- action must be modified!! -->

<script>
    function validateForm(){

        var name=document.forms["regForm"]["name"].value;
        var pass=document.forms["regForm"]["password"].value;
        var passconf=document.forms["regForm"]["passconf"].value;
        var email=document.forms["regForm"]["email"].value;
        var notification=document.forms["regForm"]["want_notifications"].value;
        var count= 0;

        if((name=="")||(email=="")||(notification=="")){

            if(name==""){
                document.getElementById("nameSp").innerHTML="Required area";
            }

            if(email==""){
                document.getElementById("emailSp").innerHTML="Required area";
            }

            if(notification==""){
                document.getElementById("notifSp").innerHTML="Required area";
            }
            count++;
        }

        if(pass.length<7){
            document.getElementById("passSp").innerHTML="7 characters minimum";
            document.getElementById("passconfSp").innerHTML="7 characters minimum";
            count++;
        }
        else{
            if(!(pass==passconf)){
                document.getElementById("passSp").innerHTML="Must be same as password confirm";
                document.getElementById("passconfSp").innerHTML="Must be same as password";
                count++;
             }   
        }


        if(count==0)
            return true;
        else
            return false;
    }

</script>


<form name="regForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">

    Name<br><input type="text" name="name"> <span id="nameSp"></span>
  <br><br>
    
  Password<br><input type="password" name="password"> <span id="passSp"></span>
  <br><br>
    
  Password Confirm<br><input type="password" name="passconf"> <span id="passconfSp"></span>
  <br><br>
    
  E-mail<br><input type="email" name="email"> <span id="emailSp"></span>
  <br><br> 

  Country<br>
  <?php 
  //php script for listing all the countries
  include_once("../db/db_init.php");
  include_once("../db/list_countries.php");
  $countries = listItems($link, 'Countries', 'CountryName');
  echo '<select name="Country">';
  foreach ($countries as $country) {
    echo '<option value=' . $country['CountryName'] . '>' . $country['CountryName'] . '</option>';
  }
  echo '</select>';
  ?>
  <br><br>
    
Allergens<br>
    <p style="font-size: 12px">Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
  <?php
  //php script for listing all the ingredients

  echo '<select name="Allergens[]" multiple>';
  $ingredients = listItems($link, 'Ingredients', 'IngredientName');
  foreach ($ingredients as $ingredient) {
    echo  '<option value=' . $ingredient['IngredientName'] .'>' .$ingredient['IngredientName']. '</option>';
  }
  echo '</select>';
  ?>


  <br><br>
  Profile image<br>
  <input type="file" name="image" id="image">
  <br><br>
  About me<br>
  <textarea name="message" rows="5" cols="30">Present yourself</textarea>
  <br>
    
  Receive email notification
  <input type="radio" name="want_notifications" value="Yes">Yes
  <input type="radio" name="want_notifications" value="No">No <span id="notifSp"></span>

  <br>
  <input type="submit" value="Confirm"> <input type="reset" value="Clear">
</form>
