<?php
// masukan file koneksi
include 'koneksi.php';

// masukan query menampilkan data untuk mengambil data dari databases
$query = mysqli_query($conn, "SELECT * FROM divisi");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. ABC</title>
</head>

<body>
    <h2>Daftar Nama Divisi PT. ABC</h2>

    <a href="tambah.php"><button>Tambah Data</button></a>
    <br><br>
    <table border="1" cellpadding="4">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($query as $data) {
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data["nama_divisi"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data["id_divisi"] ?>">
                        <button>Edit</button></a> ||
                    <a href="hapus1.php?id=<?= $data["id_divisi"] ?>">
                        <button onclick="return confirm('Yakin akan di hapus ?');">Hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>




</body>

</html>