<?php
include 'koneksi.php';

$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];

mysqli_query($koneksi, "insert into inv34 values('','$barang','$jumlah','$kondisi')");
header("location:tables5.php")
?>