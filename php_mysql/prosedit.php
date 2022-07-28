<?php
include 'koneksi.php';
$id = $_POST["id"];
$nama = $_POST["nama"];
//untuk cek pengiriamn data user
// echo $nama, $alamat, $gender;

// query tambah data
$sql = "UPDATE divisi SET nama_divisi = '$nama' WHERE id_divisi = $id ";

$query = mysqli_query($conn, $sql);

if ($query) {
    header('location:tampil_data.php');
} else {
    echo "gagal input";
}
