<?php
require 'koneksi.php';
// menangkap kiriman id pegawai
$id = $_GET['id'];

// echo $id;
$query = mysqli_query($conn, "DELETE FROM divisi WHERE id_divisi = $id");

if ($query) {
    header('location:tampil_data.php');
} else {
    // echo "gagal hapus data"
    echo mysqli_error($conn);
}
