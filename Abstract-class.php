<!-- Benni Bastian Sibarani
13321035
DIII Teknologi Komputer -->

<?php

//Class
class Coba{ 

    private $name; //Property
    private $marga; //Property
    private $tgglhr; //Property
    private $tptlhr; //Property
    private $tipe; //Property
  
  
    public function __construct($name, $marga, $tptlhr, $tgglhr, $tipe){ //Magic Method
      $this -> name = $name; // object type
      $this -> marga = $marga; // object type
      $this -> tptlhr = $tptlhr; // object type
      $this -> tgglhr = $tgglhr; // object type
      $this -> tipe = $tipe; // object type
      
    }
    public function getRetrunLengkap(){ //Method
      $str = "Nama : {$this->name} {$this->marga} <br> Tempat Tanggal Lahir : {$this->tptlhr}/{$this->tgglhr} <br>Hobi : {$this->tipe}";  // object type
      return $str;
    }
  
  
  class hobby extends Coba{
      public function getRetrunLengkap(){
          $str = parent::getRetrunLengkap();
          return $str;
      }
  }
  class gender extends Coba{
      public function getRetrunLengkap(){
          $str = parent::getRetrunLengkap();
          return $str;
      }
  }

  class Abstract{
      public $namaabstract = [];

      public function nama(Nama $name){
          $this-> namaabstract[]=$namaabstract;
      }
  }
  public function getRetrunLengkap(){ //Method
    $str = "<h1>Nama</h1> <br>";
    
    foreach($this->namaabstract as $p)
    return $str;
  }

}



