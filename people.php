<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';

include_once 'objects/user.php';

// Some test data to be removed when database is implemented
/*include_once 'TEST-DATA.php';
$testUser1 = new User("User1", "test@test.com", "myPassword", TRUE, "Argentina", array("milk", "nuts", "cats", "dogs"), 'test-data/images/user1.jpg', 'Hi, my name is polly');
$userList = array($testUser1, $testUser1, $testUser1, $testUser1, $testUser1, $testUser1, $testUser1, $testUser1);
?>*/
include_once 'db/db_init.php';
include_once 'db/db_functions.php';

$users = listItems($link, "users");
$userList = array();

foreach ($users as $user) {
  $userList[]=createUserFromDatabase($link, $user);
}
?>

<ul class="breadcrumb">
  <li><a href="main.php"><?php print($_GET['country']) ?></a></li>
  <li><a href="people.php">People</a></li>
</ul>

<?php
  if(isset($_GET['selectedUser'])){
    $selectedUser = findByName($_GET['selectedUser'], $userList);
    $content = $selectedUser->getContent();
    echo $content;
    echo '<h2>More people</h2>';
  }
  else {
    echo'
      <h1>People</h1>
      <title>People</title>
      <div class="undertitle">Find people with same alergies as yourself at the destination</div>
    ';

  }
?>

<!-- Lists of users -->
<?php
foreach($userList as $user){
  $teaser = $user->getTeaser();
  echo $teaser;
}

?>
