<?php
include 'koneksi.php';
$nama = $_POST["nama_divisi"];

//untuk cek pengiriamn data user
// echo $nama, $alamat, $gender;

// query tambah data

$query = mysqli_query($conn, "INSERT INTO divisi 
VALUES (NULL,'$nama')
");
if ($query) {
    header('location:tampil_data.php');
} else {
    echo "gagal input";
}
