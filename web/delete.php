<?php
include 'koneksi.php';
$kode = $_GET['kode'];
mysqli_query ($koneksi, "DELETE FROM inventori WHERE kode='$kode'") or die(mysqli_error());
header ("location:inventori.php?pesan=delete");
?>