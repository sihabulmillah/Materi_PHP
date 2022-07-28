<?php
require 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM divisi");



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
  <h2>Form Tambah Data Pegawai</h2>
  <a href="tampil.php"><button>Kembali</button></a>
  <br><br>
  <form action="proses_tambah.php" method="POST">
    <table border="1">
      <tr>
        <td>Nama Pegawai</td>
        <td>:</td>
        <td><input type="text" name="nama_pegawai" size="29" required></td>
      </tr>

      <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>:</td>
        <td>
          <input type="radio" name="gender" value="L" id="L"><label for="L">Laki-laki</label>
          <input type="radio" name="gender" value="P" id="P"><label for="P">Perempuan</label>
        </td>
      </tr>
      <tr>
        <td>Divisi</td>
        <td>:</td>
        <td><select name="div" id="divisi">
            <option hidden>==Pilih Divisi==</option>
            <?php foreach ($query as $data) { ?>
              <option value="<?= $data["id_divisi"] ?>"><?= $data["nama_divisi"] ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <button type="submit">Simpan</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>