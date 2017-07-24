<html>
<head>
</head>

<body>

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

<h1>Star rating:</h1><br>


<form name="ratingForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
<fieldset>
<input type="radio" name="star" value="0">☆☆☆☆☆
<input type="radio" name="star" value="1">★☆☆☆☆
<input type="radio" name="star" value="2">★★☆☆☆
<input type="radio" name="star" value="3">★★★☆☆
<input type="radio" name="star" value="4">★★★★☆
<input type="radio" name="star" value="5">★★★★★
<br><span id="starSp"></span>
<br><br>
</fieldset>
<fieldset>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>

</body>
</html>
