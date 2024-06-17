<?php
include 'koneksi.php'; 

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "SELECT * FROM tusers WHERE username='$username' AND role='$role' ";
$cek_user = mysqli_query($koneksi, $query);
$user_valid = mysqli_fetch_array($cek_user);

if($user_valid)
{
    if($password == $user_valid['password'])
    {
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['role'] = $user_valid['role'];   

        if($role == "admin")
        {
            header('location:admindashbord.php');
        }
        elseif($role == "petugas")
        {
            header('location:petugasdashbord.php');
        }
        elseif($role == "peminjam")
        {
            header('location:peminjamdashbord.php');
        }
    }
    else
    {
        echo 'Password tidak Terdaftar';
    }
}
else
    echo'Username dan password tidak terdaftar';
?>