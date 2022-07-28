<?php 
// operator aritmatika
// $a = 10;
// $b = 15;
// echo "<h1>Belajar Operator Aritmatika</h1><br>";
// echo "<h2>1. Penjumlahan</h2>";
// $jumlah = $a + $b;
// echo "Hasil Penjumlahan : ".$a ." + ".$b. " = " . $jumlah . "<br>";
// echo "======================================";

// echo "<h2>2. Pengurangan</h2>";
// $kurang = $a - $b;
// echo "Hasil Pengurangan : ". $a ." - ".$b. " = " . $kurang . "<br>";
// echo "======================================";

// echo "<h2>3. Perkalian</h2>";
// $kali = $a * $b;
// echo "Hasil Perkalian : ". $a ." * ".$b. " = " . $kali . "<br>";
// echo "======================================";

// echo "<h2>4. Pembagian</h2>";
// $bagi = $a / $b;
// echo "Hasil Pembagian : ". $a ." / ".$b. " = " . number_format($bagi,2). "<br>";
// echo "======================================";

// echo "<h2>5. Modulus/Sisa Hasil Bagi</h2>";
// $modulus = $a % $b;
// echo "Hasil Modulus : ". $a ." % ".$b. " = " . $modulus . "<br>";
// echo "======================================"."<br>";


// $x = 1+2*3-4;
// echo "1+2*3-4 = ".$x;

// assigment/penugasan
// $i = 10;
// echo "<h1>OPERATOR ASSIGMENT/PENUGASAN</h1>";
// echo "<p>Awal Nilai i = 10</p>";
// echo "<h2>1. Pengisian dan Penambahan (+=)</h2>";
// $i += 15;
// echo "Hasil i += 15 = ".$i;

// echo "<h2>2. Pengisian dan Pengurangan (-=)</h2>";
// $i -= 15;
// echo "Hasil i -= 15 = ".$i;

// echo "<h2>3. Pengisian dan Perkalian (*=)</h2>";
// $i *= 10;
// echo "Hasil i *= 10 = ".$i;

// echo "<h2>4. Pengisian dan Pembagian (/=)</h2>";
// $i /= 2;
// echo "Hasil i /= 2  = ".$i;

// echo "<h2>5. Pengisian dan Pemangkatan (**=)</h2>";
// $i **= 2;
// echo "Hasil i **= 2  = ".$i;

// echo "<h2>6. Pengisian dan Penggabungan String (.=)</h2>";
// $nama = "Ucup";
// $nama .= " Mahmudin";
// echo "Nama Depan : Ucup <br>";
// echo "Nama Lengkap .= Mahmudin : ".$nama;

// Operator Perbandingan
$a = 10 ;
$b = 15;
echo "<h1>OPERATOR PERBANDINGAN</h1>";
echo "<h2>Lebih Besar (>) <br></h2>";
echo "Apakah $a > $b ? <br>";
var_dump ($a > $b);

echo "<h2>Lebih Kecil (<) <br></h2>";
echo "Apakah $a < $b ? <br>";
var_dump ($a < $b);

echo "<h2>Lebih Kecil dari Sama Dengan (<=) <br></h2>";
echo "Apakah $a <= 10 ? <br>";
var_dump ($a <= 10);

echo "<h2>Lebih Besar dari Sama Dengan (>=) <br></h2>";
echo "Apakah $a >= $b ? <br>";
var_dump ($a >= $b);

echo "<h2>Sama Dengan (==) <br></h2>";
echo "Apakah $a == $b ? <br>";
var_dump ($a == $b);

echo "<h2>Tidak Sama Dengan (!=) <br></h2>";
echo "Apakah $a != $b ? <br>";
var_dump ($a != $b);
// kalau === maka dia menyamakan dengan tipe datanya bukan hanya nilai saja 
?>