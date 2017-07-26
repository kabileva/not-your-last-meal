<?php
//header( "refresh:5;url=../main.php" );

echo "The restaurant is added. You will be soon redirected to the main page...";
include_once 'upload_images.php';
 include_once "../objects/restaurant.php";


function makeRest() {
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
   {    
   $location = array();
   $name = $_POST['name'];
   $location[] = $_POST['location'];
   $location[] = $_POST['location1'];
   $presentation = $_POST['message'];
   $ingredients = $_POST["Ingredients"];
   $country = $_POST['country'];
   $is_alergen_friendly = 1;
   $type = "Cafe";
   $image = 'uploads/' . $_FILES["image"]["name"];
 	if ($_POST['is_menu_friendly']=='Yes') {
   	$is_menu_friendly=1;
   } else {
   	$is_menu_friendly = 0;
   }
   
   }
	$newRest = new Restaurant($name, $country, $location, $presentation, $image, $type, $is_menu_friendly, $is_alergen_friendly);
	return $newRest;
}

$newRest = makeRest();
print_r($newRest);
// echo "<br> object printed <br><br>";
// foreach ($newRest->location as $location) {
// 	# code...
// }
// print_r($newRest->location);
print_r($newRest->name);
?>