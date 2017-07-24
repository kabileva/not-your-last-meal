<?php

class Question {

  private $content, $user, $dateTime, $questionTitle, $allergens, $comments;

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

}

