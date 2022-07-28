<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="list-style-type:none;">
    <form action="karyawan.php" method="GET">
    <li>Nama Pegawai <br>    
    <input type="text" name="nama"></li>
    <li>Golongan  <br>  
    <input type="Radio" name="golongan" value="A"><label for="A">A</label>
    <input type="Radio" name="golongan" value="B"><label for="B">B</label>
    <input type="Radio" name="golongan" value="C"><label for="C">C</label>
    <input type="Radio" name="golongan" value="D"><label for="D">D</label></li>
    <li>Lama Kerja   <br>
    <input type="text" name="kerja"></li><br>
    <li><button type="submit">Kirim</button></li>
    </ul>



    </form>
</body>
</html>