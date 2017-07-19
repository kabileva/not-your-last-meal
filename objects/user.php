<?php

require_once "node.php";

class User extends Node {

  private $id, $name, $password, $notification, $country, $allergies, $image, $description, $comments;
""
  function __construct($id, $name, $email, $password, $country, $allergies, $image, $description){
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->notification = $notification;
    $this->country = $country;
    $this->allergies = $allergies;
    $this->image = $image;
    $this->description = $description;
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


