<!DOCTYPE HTML>
<?php
session_start();
?>

<header>
   <div class="topnav" id="myTopnav">
      <a href="main.php"><img src="img/burger.gif" alt="logo" style="width:50px;height:50px;"></a>

	  <a>
	  <form id="country-list" method="get">
		 <select>
		  <option value="ar">Argentine</option>
		  <option value="no">Norway</option>
		  <option value="ko">South Korea</option>
		  <option value="ky">Kazakhstan</option>
		</select>
	  </form>
	  </a>

      <a href="dishes.php">Dishes</a>
      <a href="restaurants.php">Restaurants</a>
      <a href="forum.php">Questions and answers</a>
      <a href="people.php">People</a>

      <div style="float:right;">
      <a href="userprofile.php">
        <img class="topbar profile-teaser" src="<?php echo $_SESSION['userImage']; ?>">
        <strong style="vertical-align: top;"><?php echo $_SESSION['userName']; ?></strong>
      </a>
      <a href="index.php"><strong>Log Out</strong></a>
      </div>

      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
   </div>

   <script>
      function myFunction() {
      	var x = document.getElementById("myTopnav");
      	if (x.className === "topnav") {
      		x.className += " responsive";
      	} else {
      		x.className = "topnav";
      	}
      }

   </script>

</header>
