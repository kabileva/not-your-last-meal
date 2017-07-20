<?php

require_once "node.php";

class Question extends Comment{

  private $questionTitle, $allergens, $comments;

  function __construct($questionTitle, $content, $user, $dateTime, $allergens, $comments){
    parent::__construct($content, $user, $dateTime;);
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

}
