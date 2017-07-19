<?php

require_once "node.php";

class Comment extends Node{

  private $user, $content, $date, $comments;

  function __construct($user, $content, $date, $alergens){
    $this->user = $user;
    $this->content = $content;
    $date->date = $date;
    $this->alergens = $alergens;
  }

  function createInDatabase(){
    // call to MYSQL file here
  }

  function updateInDatabase(){
    // call to MYSQL file here
  }

  function updateInDatabase(){
    // call to MYSQL file here
  }

}


