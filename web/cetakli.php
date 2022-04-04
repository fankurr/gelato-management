<!DOCTYPE html>
<html>
<body>
<br><br><br><br>
<center>
	<img src="logo.jpg" style="height:25%;width:25%;">
	<h5>Perumnas Bantar Kemang JL. Duria Raya No. 6</h5>
	<br>
	<h5>Laporan Inventori<h5>
	
<?php
include 'koneksi.php';
?>

<table style="width: 50%; font-size:12px;">
<thead>
     <tr>
        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Kode</th>
        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Nama Produk</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Harga Satuan</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Tanggal Input</th>
    </tr>
    </thead>
	<?php 
	$q = mysqli_query($koneksi, "SELECT * FROM inventori");
	while ($r = mysqli_fetch_array($q)) {
	?>
    <tbody style="background: #ffffff;">
	<tr>
	<td> <?= ucwords($r['kode']) ?></td>
	<td> <?= $r['nama_produk'];?></td>
	<td> RP.<?= $r['harga_produk']; ?></td>
	<td> <?= $r['tglinput']; ?></td>
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