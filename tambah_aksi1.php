<?php
include 'koneksi.php';

$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];

mysqli_query($koneksi, "INSERT into invlab values('','$barang','$jumlah','$kondisi')");
header("location:tables1.php")
?>