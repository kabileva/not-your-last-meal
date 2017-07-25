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


<form name="regForm" action="db/save_user.php" method="post" onsubmit="return validateForm()">


    <fieldset>
        <legend>Name</legend>
        <input type="text" name="name"> <span id="nameSp" class="required"></span>
    </fieldset>

    <fieldset>
      <legend>Password</legend>
      <input type="password" name="password"> <span id="passSp" class="required"></span>
    </fieldset>

    <fieldset>
        <legend>Password Confirm</legend>
        <input type="password" name="passconf"> <span id="passconfSp" class="required"></span>
    </fieldset>

    <fieldset>
        <legend>E-mail</legend>
        <input type="email" name="email"> <span id="emailSp" class="required"></span>
    </fieldset>


    <fieldset>
        <legend>Country</legend>
        <?php
        // //php script for listing all the countries
        require_once("db/db_init.php");
        require("db/db_functions.php");
        $countries = listItems($link, 'Countries');
        echo '<select name="Country">';
        foreach ($countries as $country) {
        echo '<option value=' . $country['CountryID'] . '>' . $country['CountryName'] . '</option>';
        }
        echo '</select>';
        ?>
    </fieldset>

    <fieldset>
        <legend>Allergens</legend>
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



    <fieldset>
        <legend>Profile image</legend>
        <input type="file" name="image" id="image">
    </fieldset>

    <fieldset>
        <legend>About me</legend>
        <textarea name="message" rows="5" cols="30">Present yourself</textarea>
    </fieldset>

    <fieldset>
        <legend>Receive email notification</legend>
        <input type="radio" name="want_notifications" value="Yes">Yes
        <input type="radio" name="want_notifications" value="No">No <span id="notifSp" class="required"></span>
    </fieldset>

    <fieldset>
        <input type="submit" value="Confirm"> <input type="reset" value="Clear">
    </fieldset>

</form>
