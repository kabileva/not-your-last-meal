<!DOCTYPE HTML>
<?php

include_once 'objects/question.php';
include_once 'objects/restaurant.php';
include_once 'objects/user.php';
include_once 'objects/dish.php';
include_once 'objects/comment.php';

$userCountry = "Argentina";

echo $userCountry;

$testUser = new User("User1", "test@test.com", "myPassword", TRUE, "Argentina", "Dogs", 'test-data/images/user1.jpg', 'user1');

echo '<br><br>';

print_r($testUser);

echo '<br><br>';

$teaser = $testUser->getTeaser();

echo $teaser;

?>
