<!DOCTYPE html>
<html>
<head>
<title>Khusus Admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<a href = "inventori.php" style="margin-left: 2%;">
<button class="btn btn-primary" type="button" style="color:white;margin-top:2%;font-size:18px;border-radius:10px;background-color:#E0CFB1;border-width:0px;">
Lihat Semua Data</button></a>
<br><br>
<center>
<table style="background-color:#E0CFB1;border-width:0px;border-radius:10px;width:50%;border-style:solid;text-align:center;padding-top:1%;">
<thead>
<th style="color:white;font-size:32px;"> Input Data </th>
<tr>
<td>
<form action="prosesinput.php" method="post">
<center>
<table style="width:95%;text-align:center;font-size:16px;padding-left:1%;padding-top:1%;padding-bottom:1%;margin-bottom:1%;margin-top:2%;background-color:rgb(80,49,48);">
<tr>
<td align="left" style="font-size:18px;color:white;"> Kode </td>
<td><input type = "text" name="kode"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Nama Produk </td>
<td><input type = "text" name="nama_produk"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Stok Produk </td>
<td><input type = "text" name="stok_produk"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Harga Produk </td>
<td><input type = "text" name="harga_produk"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Tanggal Input </td>
<td><input type = "text" name="tglinput"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td  colspan="2">
<input class="btn btn-primary" type="submit" value="simpan" style="font-size:18px;color:white;border-radius:5px;background-color:#E0CFB1;border-width:0px;">
</tr>
</table>
</center>
</form>
</td>
</table>
</center>
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