<?php
// Membuat fungsi

function halo()
{
    echo "Hallo, Dunia";
}
// fungsi dan parameter
function panggil($nama, $usia)
{
    echo "Hallo, $nama umur saya $usia";
}
// function dan default value
function lahir($bulan, $tahun = 2021)
{
    echo 'Bulan lahir ' . $bulan . ' tahun ' . $tahun;
}
function penjumlahan($a, $b)
{
    $hasil = $a + $b;
    echo "Hasil penjumlahan $a + $b = $hasil";

    return $hasil;
}
function luasLingkaran($r)
{
    $hasil = 3.14 * $r * $r;
    echo "Luas lingkarang dengan jari jari $r = $hasil";
    return $hasil;
}
function kelilingLingkaran($r)
{
    return 2 * 3.14 * $r;
}

function luasSegitiga($a, $t)
{
    return $a * $t / 2;
}

function usia($tahun_lahir, $tahun_skrg)
{
    $umur = $tahun_skrg - $tahun_lahir;
    return $umur;
}
function nama($nama)
{
    echo "Perkenalkan nama saya $nama <br>";
    echo "Usia saya sekarang adalah " . usia(1940, 2022);
}

function factorial($angka){
    if($angka < 2 ){
        return 1 ;
    }else{
        return ($angka * factorial($angka - 1));
    }
}

function tambahsatu(&$angka){
    $angka = $angka + 1;
}
$a = 3;
tambahsatu($a);
echo $a . "<br>";
echo "factorial 5 adalah " . factorial(5);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Membuat Fungsi di PHP</title>
</head>

<body>
    <!-- Memanggil Fungsi -->
    <h3><?php halo(); ?></h3>
    <h3><?php panggil("Sihab", 20); ?></h3>
    <h3><?php lahir("Juli"); ?></h3>
    <h3><?php penjumlahan(10, 10); ?></h3>
    <br>
    <h3><?php luasLingkaran(10); ?></h3>
    <h3><?php echo kelilingLingkaran(10); ?></h3>
    <h3><?php echo luasSegitiga(6, 10); ?></h3>
    <h3><?php echo nama('Sihab'); ?></h3>
</body>

</html>