<?php
include 'koneksi.php';

$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai = $id");


$quer = mysqli_query($conn, "SELECT * FROM divisi");



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
  <h2>Form Edit Data Pegawai</h2>
  <a href="tampil.php"><button>Kembali</button></a>
  <br><br>

  <?php foreach ($query as $data) { ?>
    <form action="proses_edit.php" method="POST">
      <table border="1">
        <input type="hidden" name="id" value="<?= $data["id_pegawai"]; ?>">
        <tr>
          <td>Nama Pegawai</td>
          <td>:</td>
          <td><input type="text" name="nama_pegawai" size="29" value="<?= $data["nama_pegawai"]; ?>" required></td>
        </tr>

        <tr>
          <td valign="top">Alamat</td>
          <td valign="top">:</td>
          <td><textarea name="alamat" id="" cols="30" rows="10" required><?= $data["alamat"]; ?></textarea></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>:</td>
          <td>
            <input <?php if ($data["gender"] == "L") {
                      echo "checked='checked'";
                    } ?> type="radio" name="gender" value="L" id="L"><label for="L">Laki-laki</label>
            <input <?= ($data["gender"] == "P") ? "checked='checked'" : "" ?>type="radio" name="gender" value="P" id="P"><label for="P">Perempuan</label>
          </td>
        </tr>
        <tr>
          <td>Divisi</td>
          <td>:</td>
          <td><select name="div" id="divisi">
              <option selected disabled>==Pilih Divisi==</option>
              <?php foreach ($quer as $divisi) { ?>
                <option value="<?= $divisi["id_divisi"] ?>" <?php if ($data["divisi_id"] == $divisi["id_divisi"]) {
                                                              echo "selected";
                                                            } ?>><?= $divisi["nama_divisi"] ?></option>
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
  <?php } ?>
</body>

</html>