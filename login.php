<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login KK</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div id="utama">
    <div id="header">
        Halaman Login
    </div>
    <div id="inputan">
        <form action="" method="post">
            <div>
                <input type="text" name="username" placeholder="Username" required />
            </div>
            <div style="margin-top: 10px;">
                <input type="password" name="password" placeholder="Password" required />
            </div>
            <div style="margin-top: 10px;">
                <input type="submit" name="login" value="Login" />
            </div>
        </form>
        <?php
        if (isset($_POST['login'])) {
            $user = @$_POST['username'];
            $pass = @$_POST['password'];
            $qry = mysqli_query($connection, "SELECT * FROM data_login WHERE username = '$user' AND password = md5('$pass')");
            $cek = mysqli_num_rows($qry);
            if ($cek == 1) {
                $_SESSION['userweb'] = $user;
                header("location:index.php");
                exit;
            } else {
                echo "<script>alert('Username atau Password salah');</script>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
