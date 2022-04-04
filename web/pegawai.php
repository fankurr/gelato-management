<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gelato House</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<div>
<div class="container">
<div class="row" style="width: 100%;margin-left: 0px;margin-right: 0px;">
<div class="col-md-12" style="padding-top:5%;width: 100%;">
<div>
<div class="form-group" style="background: #E0CFB1;border-radius:10px;padding-bottom:20px;border-width:0px;">
<a href="cetakdp.php" target="_blank">
<button class="btn btn-primary" type="button" style="margin-left:1%;margin-top:2%;font-size:16px;border-radius:10px;background-color:rgb(80,49,48);border-width:0px;">
Cetak Laporan Data Pegawai</button></a>
<a href="addpegawai.php">
<button class="btn btn-primary" type="button" style="margin-left:1%;margin-top:2%;font-size:16px;border-radius:10px;background-color:rgb(80,49,48);border-width:0px;">
Tambah Data Pegawai</button></a>
<a href="inventori.php">
<button class="btn btn-primary" type="button" style="margin-left:1%;margin-top:2%;font-size:16px;border-radius:10px;background-color:rgb(80,49,48);border-width:0px;">
Kembali</button></a>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-12" style="width:100%;">
<div>
<center>
<div class="form-group" style="width:97%;padding-top:10px;padding-right:5px;padding-left:5px;padding-bottom:1%;background:#E0CFB1;border-width:0px;border-radius:10px;">
<div class="table-responsive" style="width:98%;background-color:white;margin-top:1%;border-width:2px;border-style:solid;text-align:center;">
<table class="table" style="border-radius:10px;">
<thead>
<tr>
<th style="border-bottom-color: rgb(0,0,0);">NIP</th>
<th style="border-bottom-color: rgb(0,0,0);">Nama</th>
<th style="border-bottom-color: rgb(0,0,0);">Alamat</th>
<th style="border-bottom-color: rgb(0,0,0);">Jenis Kelamin</th>
<th style="border-bottom-color: rgb(0,0,0);">Nomor Telepon</th>
<th style="border-bottom-color: rgb(0,0,0);">Jabatan</th>
<th style="border-bottom-color: rgb(0,0,0);">opsi</th>
</tr>
</thead>
<?php 
include 'koneksi.php';
$sql = "select*from pegawai";
$hasil= mysqli_query($koneksi, $sql);
while($d = mysqli_fetch_array($hasil)){
	?>
<tbody>
<tr>
<td><?php echo $d['nip']; ?></td>
<td><?php echo $d['nama_pegawai']; ?></td>
<td><?php echo $d['alamat_pegawai'];?></td>
<td><?php echo $d['jenis_kelamin'];?></td>
<td><?php echo $d['no_telp'];?></td>
<td><?php echo $d['jabatan'];?></td>

<td>
<a href="deletepegawai.php?kode=<?php echo $d['nip']; ?>"> Hapus </a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<style>
body{
	font-family: sans-serif;
	background: url('bck.png');
	color: #fff;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>