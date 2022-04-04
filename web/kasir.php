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
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body style="background: rgb(230,230,230);padding: 5px;">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding-top: 5px;padding-bottom: 5px;">
                    <div class="form-group" style="background: #E0CFB1;width:94%; border-radius:20px; margin-top:3%; margin-left:1%; padding-bottom:2%;">
                        <div style="width: 50%;margin-left: 30px;">
                            <div>
							<?php
							include 'koneksi.php';

							if (isset($_POST['submit'])) {
							$np = $_POST ['nama_pro'];
							$hrg = $_POST ['harga'];
							$qty = $_POST ['qty'];
							
							$query1 = "INSERT INTO total (nama_pro, harga, qty) VALUES ('$np','$hrg','$qty');";
							$query2 = "INSERT INTO rekap (nama_pro, harga, qty) VALUES ('$np','$hrg','$qty');";
	
							mysqli_query ($koneksi, $query1);
							mysqli_query ($koneksi, $query2);
							
							header ('Location: kasir.php');
							}
							?>

							<form method="post" action="">
                                <label style="font-size:18px; font-family:Allerta, sans-serif; padding-top:25px;">
								Nama </label>
								<input type="text" name="nama_pro" id="nama_pro" style=" width:100%;border-radius:10px;border-width:2px;border-style:solid;background:white;">
								<label style="font-size: 18px; font-family: Allerta, sans-serif;">
								Harga </label>
								<input type="number" name="harga" id="harga" style="width:100%;border-radius:10px;border-width:2px;border-style:solid;background:white;">
								<label style="font-size: 18px; font-family: Allerta, sans-serif;">
								Jumlah </label>
								<input type="number" name="qty" id="qty" style="width:100%;border-radius:10px;border-width:2px;border-style:solid;background:white;"></p>
							</div>
                            <div>
							<button class="btn btn-primary" type="submit" name="submit" style="margin-right: 10px;background-color: rgb(80,49,48);border-width:0px;"><i class="fa fa-plus"></i></button>
							
							<form action="" method="post">
							<?php
							include 'koneksi.php';
							if (isset ($_POST ['hapus'])){
								$r = mysqli_query ($koneksi, "DELETE FROM total"); 
							if($r){
							header ('Location: kasir.php');
							}else {
							echo "<script> alert('Gagal menghapus data'); window.location.href = kasir.php;</script>";
							}
							}
							?>	
							<button class="btn btn-primary" type="submit" name="hapus" value="hapus" style="margin-left:2px;background-color: rgb(80,49,48);border-width:0px;">
							Clear</button>
							</form>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="width: 95%;background:#E0CFB1;padding:5px; padding-top:1px; padding-left:25px; padding-right:1px; border-radius:20px;">
                        <p style="margin-top:3%;font-family: Allerta,sans-serif;font-size:32px;color:white;">Checkout</p>
                        <div class="table-responsive" style="width:95%; border-width:2px;border-style:solid;border-radius:10px;margin-top:1%;">
                            <table class="table" style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Nama Produk</th>
                                        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Jumlah</th>
										<th style="border-bottom: 2px solid rgb(0,0,0) ;">Harga</th>
                                        <th style="border-bottom: 2px solid rgb(0,0,0) ;">Total</th>
                                    </tr>
                                </thead>
								<?php 
								$q = mysqli_query($koneksi, "SELECT * FROM total");

								$total = 0;
								$tot_bayar = 0;

								while ($r = mysqli_fetch_array($q)) {
								$total = $r['harga'] * $r ['qty'];
								$tot_bayar += $total;
								?>
                                <tbody style="background-color:white;">
								<tr>
								<td> <?= ucwords($r['nama_pro']) ?></td>
								<td> RP. <?= $r['harga'];?></td>
								<td> <?= $r['qty']; ?></td>
								<td> RP. <?= $total ?></td>
								</tr>
								<?php
								}
								?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
				<input type="text" name="hasil" disabled value = "RP. <?= $tot_bayar ?>" style="text-align: center; margin-top:8%; font-size:32px; width:100%; height:50px;">
				</input>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
								<th style="border-bottom-color: rgb(0,0,0);">nama produk</th>
								<th style="border-bottom-color: rgb(0,0,0);">harga produk</th>
                                </tr>
                            </thead>
							<?php 
							include 'koneksi.php';
							$sql = "select*from inventori";
							$hasil= mysqli_query($koneksi, $sql);
							while($d = mysqli_fetch_assoc($hasil)){
							?>
                            <tbody>
							<tr>
                            <td><?php echo $d['nama_produk']; ?></td>
							<td><?php echo $d['harga_produk'];?></td>
                            </tbody>
							<?php
							}
							?>
							</tr>
                        </table>
                    </div>
					<a href = "cetak.php" target ="_blank">
					<button class="btn btn-primary" type="submit" name="cetak" value="cetakstruk" style="margin-left:2px;background-color: rgb(80,49,48);border-width:0px;">
					Cetak</button></a>
					<a href="index.php">
					<button class="btn btn-primary" name="keluar" value="keluar" style="margin-left:2px;background-color: rgb(80,49,48);border-width:0px;">
					Keluar</button>
					</a></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>