<?php 
include "../koneksi.php";

if (isset($_POST['saveAkun'])) {
    $link = $_POST['link'];
    $user = $_POST['user'];
    $pass = $_POST['pswakun'];
    $ins  = $_POST['instansi'];
    $pemilik = $_POST['pemilik'];
    $emial = $_POST['email'];

    $tambahakun = mysqli_query($koneksi, "INSERT INTO site_akun (situs, userakun, passkun, nama_lembaga, jabatan, email) VALUES ('$link', '$user', '$pass', '$ins', '$pemilik', '$email')");

    // kembali ke menu data akun
    if ($tambahakun) {
        header("location:index.php?pesan=berhasiltambahakun");
    } else {
        header("location:index.php?pesan=gagaltambahakun");
    }
}
?>