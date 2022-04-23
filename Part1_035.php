<!-- Benni Bastian Sibarani
13321035
DIII Teknologi Komputer -->

<?php

//Class
class Coba{ 

  private $name; //Property

  public function __construct($name){ //Magic Method
    $this -> name = $name; // object type
  }
  public function retrun(){ //Method
    return $this->name;  // object type
  }
}

//Object
$ObjectResult1 = new Coba('Hello World!!');
echo $ObjectResult1 -> retrun();
$ObjectResult2 = new Coba('Pengembangan Aplikasi Berbasis Internet');
echo '<br>';
echo $ObjectResult2 -> retrun();
?>
