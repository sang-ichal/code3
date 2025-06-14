<?php
include "koneksi.php";

// ambil id dari index.php
$id = $_GET['id'];

// buat query hapus
$queri = "DELETE FROM galeri WHERE id=$id";
$hapus = mysqli_query($konek, $queri);

// apakah hapus berhasil?
if ($hapus) {
    header('Location: index.php');
} else {
    die("gagal menghapus...");
}

$konek->close();
