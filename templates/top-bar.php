<!DOCTYPE HTML>
<?php
session_start();

if(isset($_POST["country"])){
  $_SESSION['selectedCountry'] = $_POST["country"];
}
?>

<header>
   <div class="topnav" id="myTopnav">
      <a href="main.php"><img src="img/logo-top-bar.svg" alt="logo" style="width:auto;height:70px;"></a>

	  <a>
      <form id="countrylist" method="post">
	  <div id="country-list">
             <select name="country" id="countrySel" onchange="clickcountry()">
              <option value="1">Argentine</option>
              <option value="4">Norway</option>
              <option value="3">South Korea</option>
              <option value="2">Kazakhstan</option>
            </select>
      </div>
	  </form>
      </a>

      <a href="dishes.php">Dishes</a>
      <a href="restaurants.php">Restaurants</a>
      <a href="forum.php">Questions and answers</a>
      <a href="people.php">People</a>


      <a style="float:right;" href="people.php?selectedUser=<?php echo $_SESSION['userName']; ?>">
        <img style="float: right; height: 30px;" class="topbar profile-teaser" src="<?php echo $_SESSION['userImage']; ?>">
        <strong style="vertical-align: top;"><?php echo $_SESSION['userName']; ?></strong>
      </a>
      <a style="float:right;" href="index.php"><strong>Log Out</strong></a>


      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
   </div>

   <script type="text/javascript">
      var sel = document.getElementById("countrySel");
      function myFunction() {
      	var x = document.getElementById("myTopnav");
      	if (x.className === "topnav") {
      		x.className += " responsive";
      	} else {
      		x.className = "topnav";
      	}
      }
       function clickcountry(){
           document.getElementById("countrylist").submit();
       }
       
       onload = function(){
           var x;

           switch('<?php echo $_SESSION["selectedCountry"]; ?>'){
                  case '1' :
                    x=0;
                    break;
                  case '4' :
                    x=1;
                    break;
                  case '3' :
                    x=2;
                    break;
                  case '2' :
                    x=3;
                    break;
                  default :
                    break;
                  
                  }
           sel.selectedIndex = x;
       }

   </script>

</header>
