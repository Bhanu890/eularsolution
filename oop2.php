<?php 
  class Dog{
    public $name;
    public $breed;
    
    function __construct($name, $breed)
    {
      $this->name = $name;
      $this->breed = $breed;
    }
    
    function get()
    {
      echo "$this->name , $this->breed \n";
    }
  }
  
  $a = new Dog("Tyson", "Labrador");
  $b = new Dog("Jack", "Chow-Chow");
  
  $a->get();
  $b->get();
?>