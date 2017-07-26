<?php

class Restaurant {

  private $name, $country, $location, $presentation, $image, $type, $is_menu_friendly, $is_alergen_friendly, $comments;

  function __construct($name, $country, $location, $presentation, $image, $type, $is_menu_friendly, $is_alergen_friendly){
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
    // include_once("../db/db_init.php");
    // include_once("../db/db_functions.php");

    // $query = "INSERT INTO Restaurant(UserID, Password, UserName, Email, WantNotifications, CountryID, Presentation, Image) VALUES (DEFAULT,'".$this->password."','".$this->name."','".$this->email."',".$this->want_notifications.",".$this->country.",'".$this->presentation."','".$this->image."')";

    // mysqli_query($link, $query);
    // $users = listItems($link,"Users");
    // //Finding User's ID
    // foreach($users as $user) {
    //   if($user['UserName']==$this->name) {
    //     $this->id=$user['UserID'];
    //     //$this->image=$user['Image'];
    //     $this->email=$user['Email'];
    //     $this->presentation=$user['Presentation'];
    //     break;
    //   }
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
      <a class=\"restaurant-teaser-wrapper\" href=\"restaurants.php?selectedRestaurant=$this->name\">
      <div class=\"restaurant-teaser\">
        <div class=\"restaurant-image\"><img src=\"$this->image\"></div>
        <h2 class=\"restaurant-name\"> $this->name </h2>
      </div>
      </a>
    ";
  }

  function getContent(){

   // Make a string with list of alergies
   if($this->is_alergen_friendly != null){
      $is_alergen_friendly;
      foreach($this->is_alergen_friendly as $value){
        $is_alergen_friendly .= $value . ', ';
      }
   }

    return "
      <div class=\"restaurant-content\">
           <title>$this->name</title>
           <h2 class=\"restaurant-name\">$this->name</h2>
           <div class=\"restaurant-picture\"><img src=\"$this->image\" alt=\"$this->image\"></div>
           <div class=\"restaurant-type\"><b>Type:</b> $this->type</div>
           <div class=\"restaurant-country\"><b>Country:</b> $this->country</div>
           <div class=\"restaurant-menu-friendly\"><b>Informative menus:</b> $this->is_menu_friendly</div>
           <div class=\"restaurant-ingrediences\"><b>Has option for alergens:</b> $is_alergen_friendly</div>
           <div class=\"restaurant-presentation\"><b>About:</b> $this->presentation</div>
      </div>
    ";
  }

}
