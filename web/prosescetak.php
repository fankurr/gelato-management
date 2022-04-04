<?php
include 'koneksi.php';
	
$nama_pro = $_POST ['nama_pro'];
$harga = $_POST ['harga'];
$qty =$_POST ['qty'];
$tanggal_transaksi =$_POST ['tanggal_transaksi'];
	
mysqli_query($koneksi, "INSERT INTO rekapsementara (nama_pro, harga, qty, tanggal_transaksi) VALUES ('$nama_pro','$harga','$qty','$tanggal_transaksi')");
	
header ("location: penjualan_bulanan.php?pesan=input");
?>