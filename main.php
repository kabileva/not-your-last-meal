<?php

include_once 'templates/layout.php';

include_once 'objects/user.php';
include_once 'objects/question.php';
include_once 'objects/dish.php';
include_once 'objects/restaurant.php';

// Some test data to be removed when database is implemented
include_once 'TEST-DATA.php';

// Dishes
$testDish1 = new Dish('A dish from south-korea', 'South-Korea', array('Rice', 'Nudles', 'tomato', 'spice', 'suprises'), 'This is some food from South-Korea, doesnt it look yummi?', 'test-data/images/korea.jpg', 'Dinner', '');
$dishList = array($testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1);
// Restaurants
$testRestaurant1 = new Restaurant('Restaurantname', 'Kazakstan', array('log','lat'), 'Enjou your meal in this cool place', 'test-data/images/kazakstan-eating.jpg', 'Dinner', TRUE, array('gluten', 'nuts'), '');
$restaurantList = array($testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1);
// Questions
$testQuestion1 = new Question('Im alergic to milk, what do I need to think about?', 'So let me explain about my problem, bla bla bla bla bla....', 'user1', '1th January 2017', array('Gluten' , 'milk'), '');
$questionList = array($testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1);
// Users
$testUser1 = new User("User1", "test@test.com", "myPassword", TRUE, "Argentina", array("milk", "nuts", "cats", "dogs"), 'test-data/images/user1.jpg', 'Hi, my name is polly');
$userList = array($testUser1, $testUser1, $testUser1, $testUser1, $testUser1, $testUser1, $testUser1, $testUser1);
?>

<title>Not your last meal_<?php echo $_SESSION['selectedCountry']; ?></title>
<h1><?php print($userCountry) ?></h1>

<div id="main">

<?php

// Print dishes
for($i = 0; $i < 6; $i++){
  if($dishList[$i] != null) {
    $teaser = $dishList[$i]->getTeaser();
    echo $teaser;
  }
}

// Print restaurants
for($i = 0; $i < 6; $i++){
  if($restaurantList[$i] != null) {
    $teaser = $restaurantList[$i]->getTeaser();
    echo $teaser;
  }
}

// Print questions
for($i = 0; $i < 6; $i++){
  if($questionList[$i] != null) {
    $teaser = $questionList[$i]->getTeaser();
    echo $teaser;
  }
}

// Print people/profiles
for($i = 0; $i < 6; $i++){
  if($userList[$i] != null) {
    $teaser = $userList[$i]->getTeaser();
    echo $teaser;
  }
}

?>
