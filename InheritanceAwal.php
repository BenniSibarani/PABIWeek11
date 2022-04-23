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
  private $gender; //Property
  private $hobby; //Property

  public function __construct($name, $marga, $tptlhr, $tgglhr, $gender, $hobby){ //Magic Method
    $this -> name = $name; // object type
    $this -> marga = $marga; // object type
    $this -> tptlhr = $tptlhr; // object type
    $this -> tgglhr = $tgglhr; // object type
    $this -> gender = $gender; // object type
    $this -> hobby = $hobby; // object type
    
  }
  public function getRetrunLengkap(){ //Method
    $str = "Nama : {$this->name} {$this->marga} <br> Tempat Tanggal Lahir : {$this->tptlhr}/{$this->tgglhr}";  // object type
    if ($this -> name == "Benni") {
      $str .= "<br>Hobi : {$this->hobby}";
   }else if($this -> name == "Ganda") {
      $str .= "<br>Jenis Kelamin : {$this->gender}";
   }
    return $str;
  }
}

//Object
$ObjectResult1 = new Coba('Benni', 'Sibarani', 'Bekasi', '29-08-2003', 0, "Ngodangdong");
echo $ObjectResult1 -> getRetrunLengkap();
$ObjectResult2 = new Coba('Ganda', 'Sibarani', 'Tebing Tinggi', '27-09-1999', "Laki-Laki", 0);
echo "<br><hr>";
echo $ObjectResult2 -> getRetrunLengkap();
?>
