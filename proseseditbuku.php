<?php
include 'koneksi.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];

$query = "UPDATE tbuku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit' WHERE id_buku=$id_buku";

if (mysqli_query($koneksi, $query)) {
    echo "Data buku berhasil diperbarui.";
} else {
    echo "GaGal";
}
?>