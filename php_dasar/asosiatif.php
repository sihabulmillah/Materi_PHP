<?php 
// assosiatif array adalah pembuatan kumpulan data yang bertipe array dengan key yang di buat secara manual dengan string

$mahasantri = [
    ["nama" => "Sihab",
    "alamat" => "Cimahi",
    "umur" => "20",
    "status" => "Mahasantri"],
    ["nama" => "Iskandar",
    "alamat" => "Pandeglang",
    "umur" => "19",
    "status" => "Mahasantri"],
    ["nama" => "Usman",
    "alamat" => "Bogor",
    "umur" => "18",
    "status" => "Mahasantri"]
    ]



    ?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <?php 

        for($i = 0 ; $i < count($mahasantri);$i++){
        
        ?>
    <ul type="circle">

        <li>Nama : <?=$mahasantri [$i]['nama']?></li>
        <li>Alamat : <?=$mahasantri[$i]['alamat'] ?></li>
        <li>Umur : <?=$mahasantri[$i]['umur'] ?></li>
        <li>Status : <?=$mahasantri[$i]['status']?></li>
    </ul>    
    <?php }?>

    <?php foreach($mahasantri as $data){?>
    
        <ul type="circle">

    <li>Nama : <?=$data['nama']?></li>
    <li>Alamat : <?=$data['alamat'] ?></li>
    <li>Umur : <?=$data['umur'] ?></li>
    <li>Status : <?=$data['status']?></li>
    </ul>    
    
    <?php }?>
</body>
</html>
