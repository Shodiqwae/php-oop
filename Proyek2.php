<?php

class Kantor{
  protected $namakaryawan;
  protected $divisinya;

  public function __construct($namakaryawan){
    $this->namakaryawan = $namakaryawan;
  }

  public function datakaryawan($kantor) {
    echo "Nama KAryawan : ";
    return $namakaryawan;
  }  
}
  
class KaryawanA extends Kantor {
  public function datakaryawan($kantor){
    return $namakaryawan + $divisinya;
  }
} 
function datakantor(Kantor $KaryawanA){
 return $this->namakaryawan;
  echo "Nama Jurusan: " , $namakaryawan ;
}


$KaryawanA = new karyawanA("Andi");

datakantor($KaryawanA);
  

?>

