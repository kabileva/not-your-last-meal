<?php

require_once "node.php";

class Restaurant extends Node {

  private $name, $country, $location, $presentation, $image, $type, $is_menu_friendly, $is_alergen_friendly;

  function __construct($name, $country, $presentation, $image, $type, $is_menu_friendly, $is_alergen_friendly, $comments){
    $this->name = $name;
    $this->country = $country;
    $this->location = $location;
    $this->presentation = $presentation;
    $this->image = $image;
    $this->type = $type;
    $this->is_menu_friendly = $is_menu_friendly; // Does the restaurant have informative menues?
    $this->is_alergen_friendly = $is_alergen_friendly; // List of alergens that the restaurant have optional food for
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
