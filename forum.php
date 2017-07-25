<!DOCTYPE HTML>
<?php

include_once 'templates/layout.php';	

include_once 'objects/question.php';

// Some test data to be removed when database is implemented
include_once 'TEST-DATA.php';
$testQuestion1 = new Question('Im alergic to milk, what do I need to think about?', 'So let me explain about my problem, bla bla bla bla bla....', 'user1', '1th January 2017', array('Gluten' , 'milk'), '');
$questionList = array($testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1, $testQuestion1);

?>

<ul class="breadcrumb">
  <li><a href="main.php"><?php print($_GET['country']) ?></a></li>
  <li><a href="forum.php">Questions and answers</a></li>
</ul>

<a href="questionForm.php" class="callToAction">Ask a question<a>

<?php
  if(isset($_GET['selectedQuestion'])){
    $content = $testQuestion1->getContent();
    echo $content;
    echo '<h2>More questions</h2>';
  }
  else {
    echo'
      <h1>Questions and answers</h1>
      <title>Questions and answers</title>
      <div class="undertitle">Ask and give information to fellow alergic people</div>
    ';

  }
?>

<!-- Lists of users -->
<?php
foreach($questionList as $question){
  $teaser = $question->getTeaser();
  echo $teaser;
}
