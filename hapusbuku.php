<?php
include 'koneksi.php';


    $id = $_GET['id'];
    $query = "DELETE FROM tbuku WHERE id_buku='$id';";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo"Berhasil Mengapus buku";
    } else {
        echo 'Gagal menghapus data';
    }

?>