<?php 
include "../koneksi.php";

if (isset($_POST['updateAkun'])) {
    $ida = $_POST['ida'];
    $link = $_POST['link'];
    $user = $_POST['user'];
    $pass =  $_POST['pswakun'];
    $ins = $_POST['instansi'];
    $pemilik = $_POST['pemilik'];
    $email = $_POST['email'];

    // update
    $datalink = mysqli_query($koneksi,
    "UPDATE site_akun SET situs='$link', 
    userakun='$user', 
    passkun='$pass',
    nama_lembaga='$ins', 
    jabatan='$pemilik', 
    email='$email' WHERE idakun='$ida' ");

    if ($datalink) {
        header("location:index.php?pesan=berhasildiupdate");
    } else {
        header("location:index.php?pesan=gagalupdate");
    }
}

?>
