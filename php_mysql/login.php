<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

if (isset($_POST["kirim"])) {
    if ($user == "admin" && $pass == 123) {
        header("location:tampil.php");
        exit;
    } else {
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Admin</h1>
    <h2>Masukan User Name dan password</h2>
    <?php
    if (isset($error)) { ?>
        <p>User Name / Password Salah !</p>
    <?php } ?>

    <form action="" method="post">
        <ul>
            <li>User Name <input type="text" name="user"></li>
            <li>Password <input type="password" name="pass"></li>
            <li><button type="submit" name="kirim">Masuk</button></li>
        </ul>
    </form>
</body>

</html>