<?php
echo "works";
 include_once "../objects/user.php";
 include_once "../objects/get_user.php";

 $newUser = makeUser();
  print_r($newUser);

 //$newUser.createInDatabase();
?>
