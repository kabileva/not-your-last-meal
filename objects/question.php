<?php

class Question {

  private $questionTitle, $content, $user, $dateTime, $allergens, $comments;

  function __construct($questionTitle, $content, $user, $dateTime, $allergens, $comments){
    $this->content = $content;
    $this->user = $user;
    $date->dateTime = $dateTime;
    $this->questionTitle = $questionTitle;
    $this->allergens = $allergens;
    $this->comments = $comments;
  }

  function createInDatabase(){
    // call to MYSQL file here
  }

  function updateInDatabase(){
    // call to MYSQL file here
  }

  function deleteInDatabase(){
    // call to MYSQL file here
  }

  function addPost($post){
    // Add posts
  }

  function getPosts(){
    // Retrieve comments for node from database
  }

  function getTeaser(){
    return "
      <a class=\"question-teaser-wrapper\" href=\"forum.php?selectedQuestion=$this->name\">
      <div class=\"profile-teaser\">
        <h2 class=\"question-name\"> $this->questionTitle </h2>
      </div>
      </a>
    ";
  }

  function getContent(){

   // Make a string with list of alergies
   if($this->allergens != null){
      $allergens;
      foreach($this->allergens as $value){
        $allergens .= $value . ', ';
      }
   }

    return "
      <div class=\"question-content\">
           <title>$this->questionTitle</title>
           <h2 class=\"question-name\">$this->questionTitle</h2>
           <div id=\"question-dateTime\"><b>Posted:</b> $this->dateTime</div>
           <div id=\"question-alergies\"><b>About:</b> $allergens</div>
           <div class=\"question-content\">$this->content</div>
      </div>
    ";
  }

}

