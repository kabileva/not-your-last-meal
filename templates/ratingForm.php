<script>
    function validateForm(){

        var comment=document.forms["ratForm"]["star"].value;
        var count= 0;

        if(comment==""){
            document.getElementById("commSp").innerHTML="Select Star!";
            count++;
        }


        if(count==0)
            return true;
        else
            return false;
    }

</script>


<form name="ratForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
    <fieldset>
        <legend>Rating</legend>
        <input type="radio" name="star" value="0">☆☆☆☆☆
        <input type="radio" name="star" value="1">★☆☆☆☆
        <input type="radio" name="star" value="2">★★☆☆☆
        <input type="radio" name="star" value="3">★★★☆☆
        <input type="radio" name="star" value="4">★★★★☆
        <input type="radio" name="star" value="5">★★★★★
    </fieldset>
    <fieldset>
        <input type="submit" name="submit" value="Submit"> <span id="commSp"></span>
    </fieldset>
</form>
