<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';	

include_once 'objects/restaurant.php';

// Some test data to be removed when database is implemented
include_once 'TEST-DATA.php';
$testRestaurant1 = new Restaurant('Restaurantname', 'Kazakstan', array('log','lat'), 'Enjou your meal in this cool place', 'test-data/images/kazakstan-eating.jpg', 'Dinner', TRUE, array('gluten', 'nuts'), '');
$restaurantList = array($testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1, $testRestaurant1);
?>

<ul class="breadcrumb">
  <li><a href="main.php"><?php print($userCountry) ?></a></li>
  <li><a href="restaurants.php">Restaurants</a></li>
</ul>

<a href="restaurantForm.php" class="callToAction">Add restaurant<a>

<?php
  if(isset($_GET['selectedRestaurant'])){
    $content = $testRestaurant1->getContent();
    echo $content;
    echo '<h2>More restaurants</h2>';
  }
  else {
    echo'
      <h1>Restaurants</h1>
      <title>Restaurants</title>
      <div class="undertitle">Find eating places where you can eat safely at your destination</div>
    ';

  }
?>

<!-- Lists of users -->
<?php
foreach($restaurantList as $restaurant){
  $teaser = $restaurant->getTeaser();
  echo $teaser;
}
