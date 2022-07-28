
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Heading dengan HTML</h1>
    <?php 
        echo '<font color = "red"><h1>Hallo World</h1></font>';
        // $var = 'Ucup';
        // $Var = 'Unyil';
        // $VAR = 'Usro';
        
        // echo $VAR;

        // $nama = "Ucup";
        // echo ' Nama saya adalah '. $nama ;

        // echo " Nama saya adalah $nama ";
        
        //variable constanta variabel yang nilainya tetap tidak berubah ubah conto phi dalam rumus lingkaran
        define('VERSION', '1.0.0');
        const SITE_NAME = "Kelas Pemrograman";
        const BASE_URL = "https://www.kelasppl.com";
        echo "Site name: " . SITE_NAME . "<br/>";
        echo "URL: " . BASE_URL . "<br/>";
        echo "Version: " . VERSION . "<br/>";
    ?>
</body>
</html>
<?php 
// latihan
$nama = "Ucup";
$umur = 20;
$bb = 60.3;
$tb = 170.5;
$gender = 'L';

echo "Nama saya <font color='red'>$nama</font>, umur saya <font color='red'>$umur</font> tahun, berat badan <font color='red'>$bb</font> kg<br/>
tinggi badan <font color='red'>$tb</font> cm, saya ada seorang laki-laki (<font color='red'>$gender</font>). <br/><br/><br/>";

// echo 'Nama saya '.$nama.', umur saya '.$umur.', berat badan '.$bb.' kg <br/>'.'tinggi badan '.$tb.'cm, saya adalah seorang laki-laki ' .'($gender). <br/><br/>';

?>

<?php
// magic konstanta
// untuk mengetahui baris ke berapa
print "Ini baris ke- ". __LINE__ . "<br>";
// untuk mengetahui alamat file
echo "File ini berada di : ". __FILE__ . "<br>";
// untuk mengetahui alamat di rektori
echo "File ini berada di direktori : ". __DIR__ . "<br>";


?>