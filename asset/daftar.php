<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>


<html>
<head>
<title>Form Pendaftaran</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<center>
<div class="login-box">
	<div class="login-logo">
		<img src="http://localhost/tubesoot/images/tu.png" alt="Logo">
	</div>
	<div class="login-form">
		<div class="login-info">Silahkan Mendaftar dengan mengisi Form dibawah ini</div>
		<form method="post" action="prosesdaftar.php" name="login" autocomplete="off">
			<input type="text" name="username" placeholder="Ketik Username..." id="username" autofocus><br>
			<input type="password" name="password" placeholder="Ketik Password..." id="password"><br>
			<input type="password" name="password" placeholder="Ketik Ulang Password..." id="password"><br>
			<input type="submit" value="Daftar" >
		</form>
	</div>
	<div class="copy">All Rights Reserved | Copyright &copy; - 2014 | Kelompok 9 Tubes RPL-OOT</div>
</div>
</center>
</body>
</html>