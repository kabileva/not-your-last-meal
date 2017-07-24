<?php 
 echo "here";
 echo $_POST['name'];

  echo $_POST['email'];

function makeUser() {
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{   
   $name = $_POST['name'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $presentation = $_POST['message'];
   $allergies[] = $_POST["Allergens"];
   $country = $_POST['Country'];
   //$want_notifications = $_POST["want_notifications"];
   if ($_POST['want_notifications']=='Yes') {
   	$want_notifications=true;
   } else {
   	$want_notifications = false;
   }

   $image = 'img/user_default.jpg';
   include_once "user.php";
   echo "included";
   $newUser = new User($name, $email, $password, $want_notifications, $country, $allergies, $image, $presentation);
   return $newUser;
}   

}
$newUser = makeUser();
 echo "here2";

print_r($newUser);

$newUser->createInDatabase();

?>