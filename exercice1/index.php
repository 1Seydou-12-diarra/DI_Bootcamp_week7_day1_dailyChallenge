<?php
  class User {
 
 // The class properties.
 public $firstName;
 public function __construct($firstName) 
  {
    $this->firstName = $firstName;
  }

  
 
 public function hello()
 {
   $data = "hello , " .  $this -> firstName;
   return $data;
 }
}
 $nom = new User("jonh");
echo $nom ->hello();
 


