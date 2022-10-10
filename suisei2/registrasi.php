<?php

$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "administrasi";

$koneksi = mysqli_connect($hostname,$user,$password,$db_name) or die(mysqli_error($koneksi))

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $cek_user = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
    $cek_login = mysqli_num_rows($cek_user);

    if ($cek_login > 0) {
        echo "<script>
        alert('Username telah terdaftar');
        window.location = 'registrasi.php';
        </script>";
    }else {
        if ($password1 != $password2) {
            echo "<script>
            alert('konfirmasi password tidak sesuai');
            window.location = 'registrasi.php';
            </script>"
        }else {
        mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$username','$password'");
        echo "<script>
        alert('Data berhasil dikirim');
        window.location = index.php';
        </script>";
    }
    }
}



?>

<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/license/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
