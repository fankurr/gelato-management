<!DOCTYPE html>
<html>
<head>
<title> Login </title>
</head>
<body>
<br/>
<!-- cek pesan notifikasi -->
<?php
if (isset($_GET['pesan'])){
	if($_GET['pesan']=="gagal"){
		echo "login gagal! username dan password salah!";
	}else if ($_GET['pesan'] == "logout"){
		echo "anda telah berhasil logout";
	}else if($_GET['pesan'] == "belum_login"){
		echo "anda harus login untuk mengakses halaman inventori";
	}
}
?>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kotak_login" style="border-weight:0px;border-radius:15px;">
		<p class="tulisan_login" style="font-size:32px;color:black;"><b>Silahkan Masuk</b></p>
 
		<form method="post" action="koneksilogin.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" >
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">
 
			<input type="submit" class="tombol_login" value="LOGIN" style="background-color: rgb(80,49,48);border-width:0px;">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php" style="font-size:14px;"><b>kembali</b></a>
			</center>
		</form>
		
	</div>
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

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
</style>