<?php
 class SMK{
    public function jurusan(){
        return "Banyak Jurusan";
    }
 }

class PPLG extends SMK{
    public function jurusan(){
        return "Pengembangan Perangkat Lunak Dan Gim";
    }
}

class TJKT extends SMK{
    public function jurusan(){
        return "teknik Jaringan komputer dan telekomunikasi";
    }
}

class BRF extends SMK{
    public function jurusan(){
        return "Broadcasting dan perfilman";
    }
}

function namaJurusan($SMK){
    echo "Nama Jurusan : ", $SMK->jurusan()."<br><br>" ;
}
function PPLG($SMK){
    echo "Nama PPLG : ", $SMK->jurusan()."<br><br>" ;
}
$smk = new SMK();
$pplg = new PPLG();
$tjkt = new TJKT();
$brf = new BRF();

namaJurusan($smk);
PPLG($pplg);
namaJurusan($tjkt);
namaJurusan($brf);
?>