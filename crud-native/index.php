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

    <!-- BAGIAN JUMBOTRON  -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <H1>WEBSITE PERTAMAKU</H1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="container-fluid">
        <!-- BAGIAN CARD LAYOUT -->
        <div class="row row-cols-1 row-cols-md-3 row-col-sd-2">

            <!-- bagian card ini akan diulang sebanyak data di database -->
            <?php
            $query = "SELECT * FROM galeri";
            $data = mysqli_query($konek, $query);
            while ($galeri = mysqli_fetch_assoc($data)) {
            ?>
                <div class="col mb-4">
                    <div class="card">
                        <!-- memuncukan id data kemudian dihidden  -->
                        <p hidden><?php echo $galeri["id"]; ?></p>
                        <img src=<?php echo $galeri["gambar"]; ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $galeri["judul"]; ?> </h5>
                            <p class="card-text"><?php echo $galeri["artikel"]; ?></p>
                        </div>

                        <!-- tambahan footer untuk pilihan update dan delete  -->
                        <div class="card-footer">
                            <!-- tombol edit dan hapus disematkan koding php untuk menyertakan id artikel  -->
                            <small class="text-muted"><a href="edit.php?id=<?php echo $galeri["id"]; ?>" class="btn btn-info">EDIT </a> &nbsp &nbsp | &nbsp &nbsp <a href="hapus.php?id=<?php echo $galeri["id"]; ?>" class="btn btn-danger" id="hapusBtn" onclick="return konfirmasi()"> HAPUS </a> </small>
                            <!-- tombol hapus memiliki fungsi onclick untuk konfirmasi penghapusan  -->
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- akhir pengulangan card  -->
        </div>
    </div>
    <!-- BAGIAN SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- fungsi konfirmasi dalam bentuk popup massage  -->
    <script>
        function konfirmasi() {
            return confirm('Apakah anda yakin akan menghapus data ?');
        }
    </script>
</body>

</html>