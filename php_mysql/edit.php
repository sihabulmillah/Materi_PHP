<?php
include 'koneksi.php';

$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM divisi WHERE id_divisi = $id");

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
    <h2>Form Edit Data Divisi</h2>
    <a href="tampil_data.php"><button>Kembali</button></a>
    <br><br>

    <?php foreach ($query as $data) { ?>
        <form action="prosedit.php" method="POST">
            <table border="1">
                <input type="hidden" name="id" value="<?= $data["id_divisi"]; ?>">
                <tr>
                    <td>Nama Pegawai</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="29" value="<?= $data["nama_divisi"]; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>