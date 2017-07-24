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

<h1>Register/Edit a Restaurant</h1>
<form name="resForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">

    <p>
    Name<br>
    <input type="text" name="name"> <span id="nameSp"></span><br>
    </p>

    <p>
    Country<br>
    <select name="country">
          <option value="argentina">Argentina</option>
          <option value="kazakhstan">Kazakhstan</option>
          <option value="norway">Norway</option>
          <option value="republic of Korea">Republic of Korea</option>
    </select>
    </p>

    <p>
    Location<br>
    <input type="text" name="location"> <span id="locaSp"></span>
    </p>

    <p>
    Type<br>
    <select name="type">
        <option value="cafe">Cafe</option>
        <option value="restaurant">Restaurant</option>
        <option value="bar">Bar</option>
    </select>
    </p>

    <p>
    Presentation<br>
    <textarea name="message" rows="8" cols="60">Present the restaurant.
    </textarea>
    </p>

    <p>
    Image<br>
    <input type="file" name="image" id="image"> <span id="imageSp"></span>
    </p>

    <p>
    Does the restaurant have informative menues?<br>
    <input type="radio" name="is_menu_friendly" value="Yes">Yes
    <input type="radio" name="is_menu_friendly" value="No">No
    <span id="menufSp"></span><br>
    </p>

    <p>
    List of alergens that the restaurant have optional food for<br>
    <!--somebody help me to change it with right question. my English is not good-->
    <input type="radio" name="is_alergen_friendly" value="Yes">Yes
    <input type="radio" name="is_alergen_friendly" value="No">No
    <span id="alerfSp"></span>
    </p>

    <p>
    <input type="submit" value="Confirm"> <input type="reset" value="Clear">
    </p>

</form>
