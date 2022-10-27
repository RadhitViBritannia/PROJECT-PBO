<?php

    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];
    $page=@$_GET['page']; 

    $database = new PDO("mysql:host=localhost;dbname=pedulidiri", 'root', '');
    $query = $database->query("INSERT INTO tbisidata values ('$tanggal ','$jam','$lokasi','$suhu')");

    if($query){
        header("Location:index.php?page=catatan_perjalanan");
}