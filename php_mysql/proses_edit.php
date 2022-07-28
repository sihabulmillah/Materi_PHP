<?php
include 'koneksi.php';
$id = $_POST["id"];
$nama = addslashes($_POST["nama_pegawai"]);
$alamat = $_POST["alamat"];
$gender = $_POST["gender"];
$id_div = $_POST["div"];
//untuk cek pengiriamn data user
// echo $nama, $alamat, $gender;

// query tambah data
$sql = "UPDATE pegawai SET nama_pegawai = '$nama',
alamat = '$alamat', gender = '$gender',divisi_id = $id_div WHERE id_pegawai = $id ";

$query = mysqli_query($conn, $sql);

if ($query) {
    header('location:tampil.php');
} else {
    echo "gagal input";
}
