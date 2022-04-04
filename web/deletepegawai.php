<?php
include 'koneksi.php';
$kode = $_GET['kode'];
mysqli_query ($koneksi, "DELETE FROM pegawai WHERE nip='$nip'") or die(mysqli_error());
header ("location:pegawai.php?pesan=delete");
?>