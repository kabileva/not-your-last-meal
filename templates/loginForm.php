<?php include('loginHandle.php'); ?>
<script>
    function validateForm(){

        var name=document.forms["logForm"]["username"].value;
        var pass=document.forms["logForm"]["password"].value;
        var count= 0;

        if(name==""){
            document.getElementById("nameSp").innerHTML="Required area";
            count++;
        }

        if(pass.length<7){
            document.getElementById("passSp").innerHTML="7 characters minimum";
            count++;
        }

        if(count==0)
            return true;
        else
            return false;
    }

</script>

<form name="logForm" action="main.php" method="post" onsubmit="return validateForm()">
  <?php include('errors.php'); ?>
  <fieldset>
        <legend>Username</legend>
        <input type="text" name="username"> <span id="nameSp" class="required"></span>
    </fieldset>

    <fieldset>
        <legend>Password</legend>
        <input type="password" name="password"> <span id="passSp" class="required"></span>
    </fieldset>

    <fieldset>
        <input type="submit" value="Sign In" name="login_user">
    </fieldset>
</form>

<!-- action must be modified!! -->
