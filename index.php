<?php

    class calculator{
        var $nilaiAwal = 1000;
        var $nilaiAkhir;

        function inputAwal(){
            return "INI NILAI AWAL";
        }
        function inputAkhir(){
            $this->nilaiAkhir = 300;
            return $this->nilaiAkhir;
        }
        function pengurangan(){
            $hasil = $this->nilaiAwal - $this->inputAkhir();
            return $hasil;
        }
    }
    $calculatorBaru = new calculator();
    echo $calculatorBaru->inputAwal();
    echo "<br>";
    echo "nilai awal: ".$calculatorBaru->nilaiAwal. "Rp";
    echo "<br>";
    echo $calculatorBaru->inputAkhir();
    echo "<br>";
    echo $calculatorBaru->pengurangan();
?>