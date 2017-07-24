<?php

class Dish {

  private $name, $country, $ingredients, $presentation, $image, $type, $comments;

  function __construct($name, $country, $ingredients, $presentation, $image, $type, $comments){
    $this->name = $name;
    $this->country = $country;
    $this->ingredients = $ingredients;
    $this->presentation = $presentation;
    $this->image = $image;
    $this->type = $type;
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

