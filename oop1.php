<?php

  class Person{
    public $name;
    public $age;
    
    public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
    }
    
    public function get(){
      echo "$this->name , $this->age \n";
    }
  }
  
  $a = new Person('Karan', '22');
  $b = new Person('Amit', '21');
  
  $a->get();
  $b->get();

?>