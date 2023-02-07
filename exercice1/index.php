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
   echo "hello , " .  $this -> firstName;

 }
}

function test(){
  $user = new User('Johnnie');
   $user->hello();
}
 test();
 


