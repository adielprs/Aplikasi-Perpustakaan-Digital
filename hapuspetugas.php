<?php
include 'koneksi.php';


    $id = $_GET['id'];
    $query = "DELETE FROM `tusers` WHERE id='$id';";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo"Berhail Mengapus petuugas";
    } else {
        echo 'Gagal menghapus petugas';
    }

?>