<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form Tambah Data Divisi Pegawai</h2>
    <a href="tampil_data.php"><button>Kembali</button></a>
    <br><br>
    <form action="prosestam.php" method="POST">
        <table border="1">
            <tr>
                <td>Nama Divisi</td>
                <td>:</td>
                <td><input type="text" name="nama_divisi" size="29" required></td>
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