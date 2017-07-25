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

  function getTeaser(){
    return "
      <a class=\"dish-teaser-wrapper\" href=\"dishes.php?selectedDish=$this->name\">
      <div class=\"dish-teaser\">
        <div class=\"dish-image\"><img src=\"$this->image\"></div>
        <h2 class=\"dish-name\"> $this->name </h2>
      </div>
      </a>
    ";
  }

  function getContent(){

   // Make a string with list of alergies
   if($this->ingredients != null){
      $ingredients;
      foreach($this->ingredients as $value){
        $ingredients .= $value . ', ';
      }
   }

    return "
      <div class=\"dish-content\">
           <title>$this->name</title>
           <h2 class=\"dish-name\">$this->name</h2>
           <div class=\"dish-picture\"><img src=\"$this->image\" alt=\"$this->image\"></div>
           <div class=\"dish-type\"><b>Type:</b> $this->type</div>
           <div class=\"dish-country\"><b>Country:</b> $this->country</div>
           <div class=\"dish-ingrediences\"><b>Ingredients:</b> $ingredients</div>
           <div class=\"dish-presentation\"><b>About:</b> $this->presentation</div>
      </div>
    ";
  }


}

