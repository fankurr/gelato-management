<?php
include 'koneksi.php';

$nip = $_POST ['kode'];
$nama_pegawai = $_POST ['nama_pegawai'];
$alamat_pegawai = $_POST ['alamat_pegawai'];
$jenis_kelamin =$_POST ['jenis_kelamin'];
$no_telp =$_POST ['no_telp'];
$jabatan =$_POST ['jabatan'];
$gaji =$_POST ['gaji'];

mysqli_query($koneksi, "INSERT INTO pegawai VALUES('$nip','$nama_pegawai','$alamat_pegawai','$jenis_kelamin','$no_telp','$jabatan','$gaji')");

header ("location: addpegawai.php?pesan=input");
?>