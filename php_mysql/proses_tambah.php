<?php
include 'koneksi.php';
$nama = addslashes($_POST["nama_pegawai"]);
$alamat = $_POST["alamat"];
$gender = $_POST["gender"];
$id_div = $_POST["div"];
//untuk cek pengiriamn data user
// echo $nama, $alamat, $gender;

// query tambah data

$query = mysqli_query($conn, "INSERT INTO pegawai 
VALUES (NULL,'$nama','$alamat','$gender',$id_div)
");
if ($query) {
    header('location:tampil.php');
} else {
    // echo "gagal input";
    mysqli_error($conn);
}
