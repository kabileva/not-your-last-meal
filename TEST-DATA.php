<!DOCTYPE HTML>
<?php

include_once 'objects/question.php';
include_once 'objects/restaurant.php';
include_once 'objects/user.php';
include_once 'objects/dish.php';
include_once 'objects/comment.php';
include_once 'templates/layout.php';

$userCountry = "Argentina";

$testUser = new User("User1", "test@test.com", "myPassword", TRUE, "Argentina", array("milk", "nuts", "cats", "dogs"), 'test-data/images/user1.jpg', 'Hi, my name is polly');

$content = $testUser->getContent();

echo $content;


?>
