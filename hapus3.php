<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from inv32 where id='$id'");
header("location:tables3.php");
?>