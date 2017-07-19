<?php

require_once "node.php";

class Restaurant extends Node {

  private $name, $country, $location, $description, $image, $type, $menu_friendly;

  function __construct($name, $country, $description, $image, $type, $menu_friendly, $alergen_friendly, $comments){
    $this->name = $name;
    $this->country = $country;
    $this->location = $location;
    $this->description = $description;
    $this->image = $image;
    $this->type = $type;
    $this->menu_friendly = $menu_friendly; // Does the restaurant have informative menues?
    $this->alergen_friendly = $alergen_friendly; // List of alergens that the restaurant have optional food for
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
