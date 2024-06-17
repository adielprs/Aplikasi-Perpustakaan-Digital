<?php
    include 'koneksi.php';


    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit = $_POST['tahunterbit'];

    $query = "INSERT INTO tbuku (judul, penulis, penerbit, tahunterbit) VALUES ('$judul', '$penulis', '$penerbit', '$tahunterbit')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
       echo '<script>alert("Buku Berhasil Di Tambahkan"); window.location.href = "admindashbord.php";</script>';
        exit();
    } else {
        echo '<script>alert("Gagal Gagal Coba Ulang!!!");</script>';
    }
    
?>
