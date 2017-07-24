<?php

class Comment{

  private $content, $user, $dateTime;

  function __construct($content, $user, $dateTime){
    $this->content = $content;
    $this->user = $user;
    $date->dateTime = $dateTime;
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

