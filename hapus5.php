<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from inv34 where id='$id'");
header("location:tables5.php");
?>