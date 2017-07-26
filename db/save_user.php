<?php

header( "refresh:5;url=../main.php" );
include_once 'upload_images.php';

echo "You will be soon redirected to the main page...";
 include_once "../objects/user.php";
function makeUser() {
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
   {    
   $name = $_POST['name'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $presentation = $_POST['message'];
   $allergies = $_POST["Allergens"];
   $country = $_POST['Country'];
   if ($_POST['want_notifications']=='Yes') {
   	$want_notifications=1;
   } else {
   	$want_notifications = 0;
   }
   if ($uploadOk==1) {
   $image = 'uploads/' . $_FILES["image"]["name"];
   }
   else {
      $image = 'img/user_default.jpg';
   }

   include_once "user.php";

   $newUser = new User($name, $email, $password, $want_notifications, $country, $allergies, $image, $presentation);
   return $newUser;
   }     

}
 $newUser = makeUser();
 $newUser->createInDatabase();
?>
