<?php 
include "koneksi.php";

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];

    // panggil databasenya
    $cekdata = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$uname' and password='$password'");

    // hitung jumlah data
    $jumlah  = mysqli_num_rows($cekdata);
    if ($jumlah>0) {
        $_SESSION['log'] = 'True';
        $_SESSION['$email'];
       header("location:../pages/index.php?status=login");
    } else {
        header("location:../index.php?status=gagal");
    }
}

// jika sudah login ambil sessionnya untuk dibalikkan ke index.php agar bisa logout dl
if (!isset($_SESSION['log'])) {
    
} else {
    header('location:../pages/index.php');
}
?>