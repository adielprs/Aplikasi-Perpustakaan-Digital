<?php
    include 'koneksi.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address']; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "INSERT INTO tusers (name, email, address, username, password, role) VALUES ('$name', '$email', '$address', '$username', '$password', '$role')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
       echo '<script>alert("Berhasil"); window.location.href = "login.php";</script>';
        exit();
    } else {
        echo '<script>alert("Gagal Gagal i Coba Ulang!!!"); window.location.href = "registrasi.php";</script>';
    }
    
?>