<?php
  class User {
 
 // The class properties.

 public $firstName;

 public function __construct($firstName) 
  {
    $this->firstName = $firstName;
  }

  
 //function  hello() qui affiche le message hello avec le nom de l'utilisateur
 public function hello()
 {
   echo "hello , " .  $this -> firstName;

 }
}
 //function test() qui permet d'instancier l'objet $user1 et appeler la function hello()
function test(){
  $firstName = " jonnie";
  $lastName = " Roe";
  $user1 = new User('Johnnie');
   $user1->hello();
}
 test();
 


