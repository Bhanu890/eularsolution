 <?php
  class Book{
    public $title;
    public $author;
    public $isbm;
    public static $collection = array();
    
    function __construct($title, $author, $isbm)
    {
      $this->title = $title;
      $this->author = $author;
      $this->isbm = $isbm;
    }
    
    function get()
    {
      echo "$this->title , $this->author , $this->isbm \n";
    }
    
    public static function addBook($a)
    {
      self::$collection[] = $a;
    }
    public static function removeBook($a)
    {
      $key = array_search( $a, self::$collection);
      if($key !== false){
        unset(self::$collection[$key]);
        
      }
    }
    public static function getBookCollection()
    {
      return self::$collection;
    }
  }
  $book1 = new Book("The C Programming Language", "Dennis Ritchie, Brian Kernighan", "9780131101630");
  $book2 = new Book("An Introduction to Python", "Guido van Rossum", "9355423489");
  
  Book::addBook($book1);
  Book::addBook($book2);
  $collection = Book::getBookCollection();
  echo "BOOKS: \n";
  foreach($collection as $book)
  {
    $book->get();
  }
  Book::removeBook($book1);
  $collection2 = Book::getBookCollection();
  echo "BOOKS: \n";
  foreach($collection2 as $book)
  {
    $book->get();
  }
  
  
  
  
 ?>