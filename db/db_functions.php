<?php 
function listItems($link, $table) {
	$query = 'Select * From ' . $table;
	$result = mysqli_query($link, $query);   
	if (!$result)   
	{   
	  $error = 'Error fetching countries: ' . mysqli_error($link);   
	  include 'error.html.php';   
	  exit();   
	}   
	   
	while ($row = mysqli_fetch_array($result))   
	{   
	  $list[] = $row;  
	}  
	return $list; 
}
?>