<?php
	require('config.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `tb_user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi Pengendalian Dini dan Deteksi Gempa di Jawa Barat</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>


    <!-- Form for logging in the users -->
<div class="login-box">
<center><h1>Register</h1></center><br>
	<div class="login-form">
		<div class="login-info">Silahkan register pada form di bawah ini </div>
		<form action="" method="POST">
		
		<input id="username" type="text" name="username" placeholder="username" /></p>
	
		
		<input id="password" type="email" name="email" required placeholder="tubes@email.com" /></p>
 
		
		<input id="password" type="password" name="password" placeholder="password" /></p>
		
		<input class="btn register" type="submit" name="submit" value="Register" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a class="btn" href="login.php">Sudah Punya Akun</a><br><br>

<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
		</form> 
	</div>
	<div class="copy">All Rights Reserved | Copyright &copy; - 2014 | Kelompok 19 Tubes RPL-OOT</div>
</div>
</body>
</html>