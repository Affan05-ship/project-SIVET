<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from inv31 where id='$id'");
header("location:tables2.php");
?>