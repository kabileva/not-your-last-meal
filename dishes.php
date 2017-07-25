<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';

include_once 'objects/dish.php';

// Some test data to be removed when database is implemented
include_once 'TEST-DATA.php';
$testDish1 = new Dish('A dish from south-korea', 'South-Korea', array('Rice', 'Nudles', 'tomato', 'spice', 'suprises'), 'This is some food from South-Korea, doesnt it look yummi?', 'test-data/images/korea.jpg', 'Dinner', '');
$dishList = array($testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1);

?>

<ul class="breadcrumb">
  <li><a href="main.php"><?php print($userCountry) ?></a></li>
  <li><a href="dishes.php">Dishes</a></li>
</ul>

<a href="dishForm.php" class="callToAction">Add dish<a>

<?php
  if(isset($_GET['selectedDish'])){
    $content = $testDish1->getContent();
    echo $content;
    echo '<h2>More dishes</h2>';
  }
  else {
    echo'
      <h1>Dishes</h1>
      <title>Dishes</title>
      <div class="undertitle">Find dishes you can eat at your destination</div>
    ';

  }
?>

<!-- Lists of users -->
<?php
foreach($dishList as $dish){
  $teaser = $dish->getTeaser();
  echo $teaser;
}
