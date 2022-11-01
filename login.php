<?php

session_start();
require 'functions.php';
// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}
// kalau blm login bakalan mental ke login lagi, ga bakal bisa masuk index
if (isset($_SESSION["login"])) {
    header("Location: dashboard.php");
    exit;
}

// cek tombol submit udah di tekan atau belum

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;

            //cek remember me
            if (isset($_POST['remember'])) {
                //buat coockie
                setcookie('id', $row['id'], time() + 60);
                setcookie(
                    'key',
                    hash('sha256', $row['username']),
                    time() + 60
                );
            }

            header("Location: dashboard.php");
            exit;
        }
    }
    $error = true;
}
?>

<!-- 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="">
</head>

<body>





    <form action="" method="post">

        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>

</body>

</html>




 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Halaman Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>ADMIN KELURAHAN BOJONGSARI</b></a>
            </div>
            <div class="card-body">
                <h2>Silahkan Login</h2>
                <?php if (isset($error)) : ?>
                <p style="color: red; font-style:italic;">Username atau Password salah</p>

                <?php
                endif;
                ?>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Entry Your Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="login-box">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                        <a href="index.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                        <!-- <a href="registrasi.php" class="btn btn-primary">Register</a> -->
                    </div>
                </form>
                <!-- /.card -->
            </div>
            <!-- /.login-box -->

            <!-- jQuery -->
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.min.js"></script>
        </div>
    </div>
</body>

</html>