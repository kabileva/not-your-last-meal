<!DOCTYPE HTML>
<?php

class User {

  public $name, $email, $password, $want_notifications, $country, $allergies, $image, $presentation, $comments;

  function __construct($name, $email, $password, $want_notifications, $country, $allergies, $image, $presentation){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->want_notifications = $want_notifications; //modified by jaeyi
    $this->country = $country;
    $this->allergies = $allergies;
    $this->image = $image;
    $this->presentation = $presentation;
  }
  function createInDatabase(){
    // include_once("../db/db_init.php");

    // $query = "INSERT INTO Users(UserID, Password, UserName, Email, WantNotifications, CountryID, Presentation, Image) VALUES (DEFAULT,'".$this->'
    // $result = mysqli_query($link, $query);   
    // echo $result;
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
      <a href=\"user?=$this->name\">
      <div class=\"profile-teaser\">
        <div class=\"user-profile\"><img src=\"$this->image\"></div>
        <h2 class=\"user-name\"> $this->name </h2>
      </div>
      </a>
    ";
  }

  function getUserLink() {
    return 'link';
  }

}
