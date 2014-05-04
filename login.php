<?php
session_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Pengendalian Dini dan Deteksi Gempa di Jawa Barat</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	
<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}
}
?>

<div class="login-box">
	<div class="login-logo">
		<img src="http://localhost/tubesoot/images/tu.png" alt="Logo">
	</div>
	<div class="login-form">
		<div class="login-info">Silahkan login dengan mengisi username dan password</div>
		<form method="post" action="otentikasi.php" name="login" autocomplete="off">
			<input type="text" name="username" placeholder="Ketik Username..." id="username" autofocus><br>
			<input type="password" name="password" placeholder="Ketik Password..." id="password"><br>
			<input type="submit" value="Login" > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a class="btn" href="register.php">Register</a>
		</form>
	</div>
	<div class="copy">All Rights Reserved | Copyright &copy; - 2014 | Kelompok 19 Tubes RPL-OOT</div>
</div>


</body>
</html>