<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "web";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}