<?php

require_once "node.php";

class User extends Node {

  private $id, $name, $password, $want_notifications, $country, $allergies, $image, $presentation, $comments;
""
  function __construct($id, $name, $email, $password, $want_notifications, $country, $allergies, $image, $presentation){
    $this->id = $id;
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
    // call to MYSQL file here
  }

  function updateInDatabase(){
    // call to MYSQL file here
  }

  function deleteInDatabase(){
    // call to MYSQL file here
  }

}
