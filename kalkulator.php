<?php

    class Kalkulator{
        protected $angka1;
        protected $angka2;

    public function __construct($angka1, $angka2){
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    public function operator(){
        return "Operator belum Dipilih";
    }

}


class Penambahan extends Kalkulator{
    public function operator(){
        return $this->angka1 + $this->angka2;
    }
}

function hasil(Kalkulator $kalkulator){
    return $kalkulator->operator();
}

    $tambah = new Penambahan(2,4);

    echo hasil($tambah)



?>