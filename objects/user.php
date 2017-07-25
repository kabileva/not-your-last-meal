<!DOCTYPE HTML>
<?php

class User {

  public $id, $name, $email, $password, $want_notifications, $country, $allergies, $image, $presentation, $comments;

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
      include_once("../db/db_init.php");
      include_once("../db/db_functions.php");

    $query = "INSERT INTO Users(UserID, Password, UserName, Email, WantNotifications, CountryID, Presentation, Image) VALUES (DEFAULT,'".$this->password."','".$this->name."','".$this->email."',".$this->want_notifications.",".$this->country.",'".$this->presentation."','".$this->image."')";

    mysqli_query($link, $query);
    $users = listItems($link,"Users");
    //Finding User's ID
    foreach($users as $user) {
      if($user['UserName']==$this->name) {
        $this->id=$user['UserID'];
        //$this->image=$user['Image'];
        $this->email=$user['Email'];
        $this->presentation=$user['Presentation'];
        break;
      }
    }

    //Inserting allergies into users_allergies

    foreach($this->allergies as $allergy) {
       $query = "INSERT INTO users_allergens(UserID, IngredientID) VALUES (".$this->id.",".$allergy.")";
        mysqli_query($link, $query);
      }

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
      <a class=\"profile-teaser-wrapper\" href=\"people.php?selectedUser=$this->name\">
      <div class=\"profile-teaser\">
        <div class=\"user-profile\"><img src=\"$this->image\"></div>
        <h2 class=\"user-name\"> $this->name </h2>
      </div>
      </a>
    ";
  }

  function getContent(){
    include_once("../db/db_functions.php");
   // Make a string with list of alergies
    if($this->allergies != null){

      //$allergies = "";
      foreach($this->allergies as $value){
        $allergies .= $value . ', ';
      }
   }

    return "
      <div class=\"profile-content\">
           <title>$this->name</title>
           <h2 class=\"user-name\">$this->name</h2>
           <div id=\"user-picture\"><img src=\"$this->image\" alt=\"$this->name\" ></div>
           <a class=\"user-contact\" href=\"mailto:$this->email\"><div class=\"callToAction\"><b>Contact</b></div></a>
           <div class=\"user-country\"><b>Country:</b> $this->country</div>
           <div id=\"user-alergies\"><b>Alergies:</b> $allergies</div>
           <div id=\"user-about\"><b>About me:</b> $this->presentation</div>
      </div>
    ";
  }


}

function createUserFromDatabase($link, $user) {
    $query = "SELECT *
              FROM Users LEFT JOIN countries
              ON Users.CountryID = countries.CountryID
              WHERE UserID=".$user['UserID'];

    $result = mysqli_query($link, $query);
    if (!$result)
    {
      echo "no result for query ";
      $error = 'Error fetching users: ' . mysqli_error($link);
      include '../db/error.html.php';
      exit();
    }

    while ($row = mysqli_fetch_array($result))
    {
      $users[] = $row;

    }
    //print_r($ingredients);
    $newUser = new User($user['UserName'], $user['Email'], $user['Password'], $user['WantNotifications'], $user['CountryName'], $user['UserID'], $user['Image'], $user['Presentation']);
    $newUser->name = $user["UserName"];

    return $newUser;
}

function findByName($name, $userList) {
  foreach ($userList as $user) {
    if ($user->name==$name) {
      return $user;
    }
  }
}
