<!DOCTYPE html>
<html>
<head>
<title>Khusus Admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<a href = "pegawai.php" style="margin-left: 2%;">
<button class="btn btn-primary" type="button" style="color:white;margin-top:2%;font-size:18px;border-radius:10px;background-color:#E0CFB1;border-width:0px;">
Lihat Semua Data</button></a>
<br><br>
<center>
<table style="background-color:#E0CFB1;border-width:0px;border-radius:10px;width:50%;border-style:solid;text-align:center;padding-top:1%;">
<thead>
<th style="color:white;font-size:32px;"> Input Data Pegawai</th>
<tr>
<td>
<form action="prosesinputpegawai.php" method="post">
<center>
<table style="width:95%;text-align:center;font-size:16px;padding-left:1%;padding-top:1%;padding-bottom:1%;margin-bottom:1%;margin-top:2%;background-color:rgb(80,49,48);">
<tr>
<td align="left" style="font-size:18px;color:white;"> NIP </td>
<td><input type = "text" name="nip"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Nama Pegawai </td>
<td><input type = "text" name="nama_pegawai"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Alamat Pegawai </td>
<td><input type = "text" name="alamat_pegawai"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Jenis Kelamin</td>
<td><input type = "text" name="jenis_kelamin"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> No Telp </td>
<td><input type = "text" name="no_telp"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Jabatan </td>
<td><input type = "text" name="jabatan"></td>
</tr>
<tr>
<td align="left" style="font-size:18px;color:white;"> Gaji </td>
<td><input type = "text" name="gaji"></td>
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