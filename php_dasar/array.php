
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
//assosiatif array 
$pegawai = ["Ricky" => "Bekasi","Usman" => "Kalimantan","Faqih" => "Bokor","Arya" => "Aceh","Aep" => "Bangka","Iskandar" => "Jakarta","Wahid" => "Surabaya"];
?>

<h1>Daftar Pegawai PT.X</h1>
<table border=1>
    <tr>
        <td>Nama Pegawai</td>
        <td>Asal</td>
    </tr>
    <?php foreach($pegawai as $data => $asal){?>
    <tr>
        <td><?= $data?></td>
        <td><?= $asal?></td>
    </tr>
    <?php }?>


</table>
</body>
</html>

