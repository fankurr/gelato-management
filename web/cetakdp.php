<!DOCTYPE html>
<html>
<body>
<br><br><br><br>
<center>
	<img src="logo.jpg" style="height:25%;width:25%;">
	<h5>Perumnas Bantar Kemang JL. Duria Raya No. 6</h5>
	<br>
	<h5>Laporan Data Pegawai<h5>
	
<?php
include 'koneksi.php';
?>

<table style="width: 50%; font-size:12px;">
<thead>
     <tr>
        <th style="border-bottom: 2px solid rgb(0,0,0) ;">NIP</th>
        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Nama Pegawai</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Alamat</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Jenis Kelamin</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">No Telp</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Jabatan</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Gaji</th>
    </tr>
    </thead>
	<?php 
	$q = mysqli_query($koneksi, "SELECT * FROM pegawai");
	while ($r = mysqli_fetch_array($q)) {
	?>
    <tbody style="background: #ffffff;">
	<tr>
	<td> <?= ucwords($r['nip']) ?></td>
	<td> <?= $r['nama_pegawai'];?></td>
	<td> <?= $r['alamat_pegawai']; ?></td>
	<td> <?= $r['jenis_kelamin']; ?></td>
	<td> <?= $r['no_telp']; ?></td>
	<td> <?= $r['jabatan']; ?></td>
	<td> <?= $r['gaji_pegawai']; ?></td>
	</tr>
	<?php
	}
	?>
	</tbody>
	</table>
	<script>
	window.print();
	</script>
</center>
</body>
</html>