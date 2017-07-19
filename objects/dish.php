<?php

require_once "node.php";

class Dish extends Node {

  private $name, $country, $ingredients, $presentation, $image, $type, $comments;

  function __construct($name, $country, $ingredients, $presentation, $image, $type){
    $this->name = $name;
    $this->country = $country;
    $this->ingredients = $ingredients;
    $this->presentation = $presentation;
    $this->image = $image;
    $this->type = $type;
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
