<?php

require_once "node.php";

class User extends Node {

  private $id, $name, $password, $is_notify, $country, $allergies, $image, $description, $comments;
""
  function __construct($id, $name, $email, $password, $is_notify, $country, $allergies, $image, $description){
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->is_notify = $is_notify; //modified by jaeyi
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
