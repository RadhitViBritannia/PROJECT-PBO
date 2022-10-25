<?php
session_start();
$nik = $_POST['nik'];
$nama = $_POST['nama'];

$koneksi = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
$query = $koneksi->query("SELECT * FROM `tbakun` WHERE nik='$nik' AND nama='$nama'");
$data = $query->fetch();
if($data){
    $_SESSION['nik'] = $nik;
    $_SESSION['nama'] = $nama;
    header("Location:index.php");

if(mysqli_connect($query)){
    echo "Login Berhasil";
}else{
    echo "Login Gagal";
}

// jika di tekan tombol pengguna baru
if (isset($_POST['pengguna_baru'])) {

}
// jika di tekan tombol masuk
elseif(isset($_POST['masuk'])) {
    echo"masuk";

}else{
    header("Location:login.php");
}
}
?>