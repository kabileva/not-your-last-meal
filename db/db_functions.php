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

function itemByID($link, $table, $column, $id, $idName) {
	$query = 'SELECT '. $column. ' FROM '.$table. ' WHERE '.$idName. '=' .$id;
	$result = mysqli_query($link, $query);   
	if (!$result)   
	{   
	  $error = 'Error fetching items: ' . mysqli_error($link);   
	  include 'error.html.php';   
	  exit();   
	}   
	while ($row = mysqli_fetch_array($result))   
	{   
	  $list[] = $row;  
	}
	foreach ($list as $c) {
		$country = $c[$column];
	}
	return $country;
}
?>