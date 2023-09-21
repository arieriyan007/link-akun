<?php 
// session start
session_start();
// mengilangkan error
error_reporting(0);

// koneksi ke database
$koneksi = mysqli_connect("localhost","root","","akun_url");

// jika koneksi error
if (mysqli_connect_errno()) {
    echo "<div class='alert alert-danger text-center' role='alert'> Gagal koneksi ke database</div>";
}
?>