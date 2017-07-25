<div style="float: left;">
  <script>
      function validateForm(){
          var star=document.forms["ratingForm"]["star"].value;
          var count= 0;
          if(star==""){

             document.getElementById("starSp").innerHTML="Required area";

              count++;
          }
          if(count==0)
              return true;
          else
              return false;
      }
  </script>

<form name="ratingForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
<fieldset>
<legend>Your rating:</legend>
<div><input type="radio" name="star" value="0">☆☆☆☆☆</div>
<div><input type="radio" name="star" value="1">★☆☆☆☆</div>
<div><input type="radio" name="star" value="2">★★☆☆☆</div>
<div><input type="radio" name="star" value="3">★★★☆☆</div>
<div><input type="radio" name="star" value="4">★★★★☆</div>
<div><input type="radio" name="star" value="5">★★★★★</div>
<br><span id="starSp" class="required"></span>
</fieldset>
<input type="submit" name="submit" value="Submit">
</form>
</div>
