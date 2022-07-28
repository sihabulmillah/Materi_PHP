<?php

$a = $_POST["nama"];
$b = $_POST["nilai"];
if ($b <= 100 && $b > 85) {
    $grade = "A";
    $predikat = "<font style='font-weight:bold'; color = 'blue'>CUMLAUDE</font>";
} elseif ($b <= 85 && $b > 75) {
    $grade = "B";
    $predikat = "<font style='font-weight:bold'; color = 'green'>BAIK</font>";
} elseif ($b <= 75 && $b > 60) {
    $grade = "C";
    $predikat = "<font style='font-weight:bold'; color = 'orange'>CUKUP</font>";
} elseif ($b <= 60 && $b > 40) {
    $grade = "D";
    $predikat = "<font style='font-weight:bold'; color = 'orange'>KURANG CUKUP</font>";
} elseif ($b <= 40 && $b >= 0) {
    $grade = "E";
    $predikat = "<font color = 'red'>GAGAL</font>";
} else {
    $not = "Nilai Tidak Di Temukan";
}
$var = $b <= 100 && $b >= 0 ? $b : $not;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3,
        table,
        th,
        td {
            text-align: center;
            margin: 20px auto;
            font-family: arial;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <h3>Rekap Nilai Mahasantri</h3>
    <table border=1 cellspacing=6 cellpadding=6>
        <thead>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
        </thead>
        <tr align=center>
            <td><?= $a ?></td>
            <td><?= $var ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>
    </table>
</body>

</html>