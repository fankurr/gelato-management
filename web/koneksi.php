<?php
$koneksi = mysqli_connect("localhost","root","","gelato");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>