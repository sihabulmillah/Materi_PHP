<?php
// membuat class
class Manusia
{
    // membuat proferty
    var $nama;
    var $usia;
    var $gender;

    function melompat($tinggi)
    {
        echo "Melompat setinggi $tinggi";
    }
    function berlari()
    {
        echo " $this->nama Berlari";
    }
}
$arya = new Manusia();
$arya->nama = 'Arya';
$arya->usia =  30;
$arya->gender = 'L';
$arya->gender = 'Laki laki';

echo "Nama saya adalah $arya->nama , Usia saya $arya->usia , gender $arya->gender <br>";

$arya->melompat(20);
$arya->berlari();
