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
        <th style="border-bottom-color: rgb(0,0,0);">Nama Produk</th>
		<th style="border-bottom-color: rgb(0,0,0);">Harga</th>
		<th style="border-bottom-color: rgb(0,0,0);">Jumlah</th>
		<th style="border-bottom-color: rgb(0,0,0);">Tanggal Transaksi</th>
    </tr>
    </thead>
	<?php 
	$q = mysqli_query($koneksi, "SELECT * FROM rekap");
	while ($r = mysqli_fetch_array($q)) {
	?>
    <tbody style="background: #ffffff;">
	<tr>
	<td> <?= ucwords($r['nama_pro']) ?></td>
	<td> RP.<?= $r['harga'];?></td>
	<td> <?= $r['qty']; ?></td>
	<td> <?= $r['tanggal_transaksi']; ?></td>
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