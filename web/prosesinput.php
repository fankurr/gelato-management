<?php
include 'koneksi.php';

$kode = $_POST ['kode'];
$nama_produk = $_POST ['nama_produk'];
$stok_produk = $_POST ['stok_produk'];
$harga_produk =$_POST ['harga_produk'];

mysqli_query($koneksi, "INSERT INTO inventori VALUES('$kode','$nama_produk','$stok_produk','$harga_produk')");

header ("location: add.php?pesan=input");
?>