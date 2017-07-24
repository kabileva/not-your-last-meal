<script>
    function validateForm(){

        var comment=document.forms["comForm"]["comment"].value;
        var count= 0;

        if(comment==""){

            document.getElementById("commSp").innerHTML="Required area";
            count++;
        }


        if(count==0)
            return true;
        else
            return false;
    }

</script>


<form name="comForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">

    <fieldset>
        <legend>Comment</legend>
        <textarea name="comment" rows="2" cols="50"></textarea> <span id="commSp"></span>
    </fieldset>

    <fieldset>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

