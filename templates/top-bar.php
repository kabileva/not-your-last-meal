<?php

echo '

<header>
   <div class="topnav" id="myTopnav">
      <a href="main.php"><img src="img/burger.gif" alt="Mountain View" style="width:50px;height:50px;"></a>

	  <a>
	  <div id="country-list">
		 <select>
		  <option value="ar">Argentine</option>
		  <option value="no">Norway</option>
		  <option value="ko">South Korea</option>
		  <option value="ky">Kazakhstan</option>
		</select> 
	  </div>
	  </a>
	  
      <a href="dishes.php">Dishes</a>
      <a href="restaurants.php">Restaurants</a>
      <a href="forum.php">Questions and answers</a>
      <a href="people.php">People</a>

      <a href="profile.html" style="float:right;"><strong>User Name</strong></a>
      <a href="login.html" style="float:right;"><strong>Log Out</strong></a>
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

'

?>
