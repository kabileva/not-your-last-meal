<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';

include_once 'objects/dish.php';
include_once 'db/db_init.php';
// Some test data to be removed when database is implemented
include_once 'TEST-DATA.php';
// $testDish1 = new Dish('A dish from south-korea', 'South-Korea', array('Rice', 'Nudles', 'tomato', 'spice', 'suprises'), 'This is some food from South-Korea, doesnt it look yummi?', 'test-data/images/korea.jpg', 'Dinner', '');
// $dishList = array($testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1, $testDish1);
include_once 'db/db_functions.php';
$dishes = listItems($link, "Dishes");
//$dishList = array();

foreach ($dishes as $dish) {
  $dishList[]=createFromDatabase($link, $dish);
}
  //echo $_SESSION['selectedCountry']);
  //$dishList = filterByCountry($_SESSION['selectedCountry'], $dishes);


?>

<ul class="breadcrumb">
  <li><a href="main.php"><?php print($_SESSION['selectedCountry']) ?></a></li>
  <li><a href="dishes.php">Dishes</a></li>
</ul>

<a href="dishForm.php" class="callToAction">Add dish<a>

<?php
  //Filter dishes by selected country
  $dishListFiltered = filterByCountry($_SESSION['selectedCountry'], $dishList);
  if(isset($_GET['selectedDish'])){
    $selectedDish = findByID($_GET['selectedDish'], $dishListFiltered);

    $content = $selectedDish->getContent();
    echo $content;

    echo '<div style="padding: 40px 0px 40px 0px;">';
    include_once 'templates/ratingForm.php';
    include_once 'templates/commentForm.php';
    echo '</div>';

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
foreach($dishListFiltered as $dish){
  $teaser = $dish->getTeaser();
  echo $teaser;
}
