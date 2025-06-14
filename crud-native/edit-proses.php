<?php

include("koneksi.php");

// ambil data dari halaman index.php
$id = $_POST['id'];
$judul = $_POST['judul'];
$artikel = $_POST['artikel'];
$gambar = $_POST['gambar'];


// buat query update
$queri = "UPDATE galeri SET judul='$judul', artikel='$artikel', gambar='$gambar'WHERE id=$id";
$update = mysqli_query($konek, $queri);

// apakah query update berhasil?
if ($update) {
    // kalau berhasil alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan ..");
}
