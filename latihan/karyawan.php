<?php 

$a = $_GET["nama"];
$b = $_GET["golongan"];
$c = $_GET["kerja"];

if($c <= 48){
    if($b == 'A'){
        $gaji = $c * 4000;
    }elseif($b == 'B'){
        $gaji = $c * 5000;
    }elseif($b == 'C'){
        $gaji = $c * 6000;
    }elseif($b == 'D'){
        $gaji = $c * 7000;
    }
}elseif($c > 48){
    if($b == 'A'){
        $gaji = 48 * 4000 + ($c-48)*5000 ;
    }elseif($b == 'B'){
        $gaji = 48 * 5000 + ($c-48)*5000 ;
    }elseif($b == 'C'){
        $gaji = 48 * 6000 + ($c-48)*5000 ;
    }elseif($b == 'D'){
        $gaji = 48 * 7000 + ($c-48)*5000 ;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3,table,th,td{
            text-align : center;
            margin: 20px auto;
            font-family: arial;
            border-radius : 3px;
        }
    </style>
</head>
<body>
    <h3>Data Pegawai</h3>
    <table border = 1 cellspacing = 6 cellpadding = 6 >
        <thead>
            <th>Nama</th>
            <th>Golongan</th>
            <th>Lama Kerja (Jam)</th>
            <th>Gaji</th>
        </thead>
        <tr>
            <td><?= $a ?></td>
            <td><?= $b ?></td>
            <td><?php echo "$c"; ?></td>
            <td><?= "Rp.$gaji" ?></td>
        </tr>
    </table>
</body>
</html>