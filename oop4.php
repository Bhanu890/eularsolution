 <?php
  class Rectangle{
    public $radius;
    
    function __construct($radius)
    {
      $this->radius = $radius;
    }
  
    function area()
    {
      $area = 22/7*$this->radius*$this->radius ;
      echo "$area \n";
    }
    
    function perimeter()
    {
      $peri = 22/7*2*$this->radius;
      echo "$peri \n";
    }
  }
  
  $a = new Rectangle(5);
  $a->area();
  $a->perimeter();
  $a->radius = 3;
  $a->area();
  $a->perimeter();
 ?>