<!DOCTYPE html>
<html>
<body>
<br><br><br><br>
<center>
	<h4>GELATO HOUSE<h4>
	<h5>Perumnas Bantar Kemang JL. Duria Raya No. 6<h5>
	<br><br>
	<h5>Nota Bayar<h5>
	
<?php
include 'koneksi.php';
?>

<table style="width: 50%; font-size:12px;">
<thead>
     <tr>
        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Nama Produk</th>
        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Jumlah</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Harga</th>
		<th style="border-bottom: 2px solid rgb(0,0,0) ;">Total</th>
    </tr>
    </thead>
	<?php
	$GET_
	$q = mysqli_query($koneksi, "SELECT * FROM rekap");
	$total = 0;
	while ($r = mysqli_fetch_array($q)) {
	$total = $r['harga']*$r ['qty'];
	?>
    <tbody style="background: #ffffff;">
	<tr>
	<td> <?= ucwords($r['nama_pro']) ?></td>
	<td> RP. <?= $r['harga'];?></td>
	<td> <?= $r['qty']; ?></td>
	<td> RP. <?=$total ?></td>
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