<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tbuku WHERE id_buku=$id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

?>


<h2 class="text-center">Edit Buku</h2>
<form method="post" action="proseseditbuku.php">
    <input type="hidden" name="id_buku" value="<?= $data['id_buku']; ?>">
    <div class="card">
        <div class="row">
            <div class="col-2">
                <label for="exampleInputEmail1" class="form-label">Judul</label>
            </div>
            <div class="col-10">
                <input type="text" name="judul" class="form-control" value="<?= $data['judul']; ?>" required><br>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="row">
            <div class="col-2">
                <label for="exampleInputEmail1" class="form-label">Penulis</label>
            </div>
            <div class="col-10">
            <input type="text" name="penulis" class="form-control" value="<?= $data['penulis']; ?>" required><br>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="row">
            <div class="col-2">
                <label for="exampleInputEmail1" class="form-label">Penerbit</label>
            </div>
            <div class="col-10">
            <input type="text" name="penerbit" class="form-control" value="<?= $data['penerbit']; ?>" required><br>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="row">
            <div class="col-2">
                <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
            </div>
            <div class="col-10">
            <input type="text" name="tahunterbit" class="form-control" value="<?= $data['tahunterbit']; ?>" required><br>
            </div>
        </div>
    </div>

    <div class="tombol">
    <button class="btn btn-primary"><i class='bx bxs-save'></i>Simpan Data</button>
    <a href="index.php" class="btn btn-danger"><i class='bx bx-arrow-back'></i>Kembali</a>
    </div>
</form>

<body>
    <script src="botstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
    .card {
        margin-top: 50px;
        margin-left: 250px;
        width: 900px;
    }
    .tombol
    {
        margin: 20px 0px 0px 250px;
    }
</style>