 <?php
  class Rectangle{
    public $height;
    public $width;
    
    function __construct($height, $width)
    {
      $this->height = $height;
      $this->width = $width;
    }
    
    function area()
    {
      $area = $this->height * $this->width;
      echo "$area \n";
    }
    
    function perimeter()
    {
      $peri = 2*($this->height+$this->width);
      echo "$peri \n";
    }
  }
  
  $a = new Rectangle(3,5);
  $b  = new Rectangle(2,6);
  $a->area();
  $a->perimeter();
  $b->area();
  $b->perimeter();
 ?>