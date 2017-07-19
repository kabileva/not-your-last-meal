<?php

require_once "node.php";

class Dish extends Node {

  private $name, $country, $ingredients, $description, $image, $type, $comments;

  function __construct($name, $country, $ingredients, $description, $image, $type){
    $this->name = $name;
    $this->country = $country;
    $this->ingredients = $ingredients;
    $this->description = $description;
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
