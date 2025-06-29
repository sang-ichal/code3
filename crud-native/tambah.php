<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE PERTAMAKU</title>

    <!-- import cdn css bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

    <?php include "header.php" ?>

    <div class="container">
        <!-- bagian form tambah konten  -->
        <h1>TAMBAH KONTEN</h1>
        <form action="tambah-proses.php" method="post">
            <div class="form-group">
                <label for="judul">JUDUL</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul artikel">
            </div>
            <div class="form-group">
                <label for="artikel">ARTIKEL</label>
                <textarea type="text" class="form-control" id="editor" name="artikel" placeholder="konten artikel"> </textarea>
            </div>
            <div class="form-group">
                <label for="gambar">GAMBAR</label>
                <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Link gambar">
            </div>
            <button type="submit" class="btn btn-primary">TAMBAH</button>
        </form>
        <!-- akhir bagian form tambah konten  -->


    </div>
    <!-- BAGIAN SCRIPTS -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>