<?php
require 'koneksi.php';
// menangkap kiriman id pegawai
$id = $_GET['id'];

// echo $id;
$query = mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai = $id");

if ($query) {
    header('location:tampil.php');
} else {
    // echo "gagal hapus data"
    echo mysqli_error($conn);
}
