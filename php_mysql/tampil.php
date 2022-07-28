<?php
// masukan file koneksi
include 'koneksi.php';

// masukan query menampilkan data untuk mengambil data dari databases
$query = mysqli_query($conn, "SELECT pegawai.*, divisi.* FROM pegawai INNER JOIN divisi ON pegawai.divisi_id = divisi.id_divisi");


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
    <h2>Daftar Nama Pegawai PT. ABC</h2>

    <a href="form_tambah.php"><button>Tambah Data</button></a>
    <br><br>
    <table border="1" cellpadding="4">
        <tr bgcolor="red">
            <th>#</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Divisi</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        foreach ($query as $data) {
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data["nama_pegawai"] ?></td>
                <td><?= $data["alamat"] ?></td>
                <td><?php
                    $gender = ($data["gender"] == "L") ? "Laki-laki" : "Perempuan";
                    echo $gender;
                    ?></td>
                <td><?= $data["nama_divisi"] ?></td>
                <td>
                    <a href="form_edit.php?id=<?= $data["id_pegawai"] ?>">
                        <button>Edit</button></a> ||
                    <a href="hapus.php?id=<?= $data["id_pegawai"] ?>">
                        <button onclick="return confirm('Yakin akan di hapus ?');">Hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>




</body>

</html>