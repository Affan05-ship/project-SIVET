<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from inv33 where id='$id'");
header("location:tables4.php");
?>