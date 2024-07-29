<?php
include 'koneksi.php';
    if ( isset($_POST['simpan'])){  
    $id = $_POST['id'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];
    $kondisi = $_POST['kondisi'];
    
    mysqli_query($koneksi, "UPDATE invlab SET barang='$barang', jumlah='$jumlah', kondisi='$kondisi' WHERE id='$id'") or die(mysqli_error($koneksi));
    }
    header("location:tables1.php")
    
?>