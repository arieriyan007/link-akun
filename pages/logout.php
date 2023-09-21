<?php 
session_start();
// destroy
session_destroy();
// kembali kehalaman login
header("location:../index.php?status=logout");
?>