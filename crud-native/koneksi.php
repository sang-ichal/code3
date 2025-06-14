<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "cms";

$konek = mysqli_connect($server, $user, $password, $database);

//cek koneksi
if (!$konek) {
    die("Database tidak terhubung : " . mysqli_connect_error());
}
