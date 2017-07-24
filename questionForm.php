<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';

include_once 'templates/go-back.php';	
?>

<form name="quesForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return quesvalidateForm()">
    
    
    <fieldset>
        <legend>Title</legend>
        <input type="text" name="title"> <span id="titleSp"></span>
    </fieldset>
    
    
    <fieldset>
        <legend>Post a question</legend>
        <textarea name="question" rows="10" cols="60"></textarea>
        <span id="quesSp"></span>
    </fieldset>
    
    
    <fieldset>
        <input type="submit" value="Confirm"> <input type="reset" value="Clear">
    </fieldset>
    
    
</form>

<script>
    function quesvalidateForm(){

        var title=document.forms["quesForm"]["title"].value;
        var question=document.forms["quesForm"]["question"].value;
        var count= 0;

        if((title=="")||(question=="")){
            if(title==""){
                document.getElementById("titleSp").innerHTML="Required area";
            }
            if(question==""){
                document.getElementById("quesSp").innerHTML="Required area";
            }
            count++;
        }


        if(count==0)
            return true;
        else
            return false;
    }

</script>
