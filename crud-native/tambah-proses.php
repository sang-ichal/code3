<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $id = "";
    $judul = $_POST["judul"];
    $artikel = $_POST["artikel"];
    $gambar = $_POST["gambar"];

    $sql = "INSERT INTO galeri (id, judul, artikel, gambar) VALUES ('$id', '$judul', '$artikel', '$gambar')";

    if ($konek->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $konek->error;
    }
}
$konek->close();
