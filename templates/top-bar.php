<?php

echo '<header>

<div class="topnav" id="myTopnav">
					<a href="main.html"><img src="img/burger.gif" alt="Mountain View" style="width:20px;height:20px;"></a>
					<a href="#argentina">Argentina</a>
					<a href="#kazajistan">Kazajistan</a>
					<a href="#korea">Korea</a>
					<a href="#norway">Norway</a>
					<a href="login.html" style="float:right;"><strong>Log Out</strong></a>
					<a href="profile.html" style="float:right;"><strong>User Name</strong></a>
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



		</header>'

?>
