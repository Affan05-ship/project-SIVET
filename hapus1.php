<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from invlab where id='$id'");
header("location:tables1.php");
?>