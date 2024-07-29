<?php
include 'koneksi.php';

$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];

mysqli_query($koneksi, "insert into inv33 values('','$barang','$jumlah','$kondisi')");
header("location:tables4.php")
?>