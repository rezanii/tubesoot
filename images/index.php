<?php
session_start();
$user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : ''; // cek jika user sudah login
$kary_id = isset( $_GET['kary_id'] ) ? $_GET['kary_id'] : '';
include "fungsi.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Pengendalian Dini dan Deteksi Gempa di Jawa Barat</title>
<link rel="stylesheet" type="text/css" href="images/style.css" />
</head>
<body>

<?php
// jika user sudah login
if( $user_id ) {
	// ambil data user dari database
	$userdata = mysql_fetch_array( mysql_query( "SELECT * FROM tb_user WHERE user_id='{$user_id}'" ) );
	
	echo "<div class=\"wrap\">\n";
	echo "	<div class=\"header\">\n";
	echo "		<div class=\"h-left\">\n";
	echo "			<img src=\"".URL."/images/tu.png\" alt=\"Logo\">\n";
	echo "		</div>\n";
	echo "		<div class=\"h-right\">\n";
	echo "			<div class=\"u-info\">\n";
	echo "				<div class=\"u-foto\"><img src=\"".URL."/images/foto.jpg\" alt=\"Foto\"></div>\n";
	echo "				<div class=\"u-text\">\n";
	echo "					<div class=\"u-name\">Welcome, <b>{$userdata['fullname']}</b></div>\n";
	echo "					<div class=\"u-link\"><a href=\"".URL."/index.php?page=logout\">Logout Now</a></div>\n";
	echo "				</div>\n";
	echo "				<div class=\"clear\"></div>\n";
	echo "			</div>\n";
	echo "		</div>\n";
	echo "		<div class=\"clear\"></div>\n";
	echo "	</div>\n";
	
	echo "	<div class=\"page\">\n";
	echo "		<div class=\"p-left\">\n";
	echo "			<div class=\"box\">\n";
	echo "				<h1>Menu Utama</h1>\n";
	echo "				<ul class=\"nav\">\n";
	echo "					<li><a href=\"index.php\">Home</a></li>\n";
	echo "					<li><a href=\"index.php?page=daftar-member\">Daftar Member</a></li>\n";
	echo "					<li><a href=\"index.php?page=tambah-member\">Tambah Membern</a></li>\n";
	echo "					<li><a href=\"index.php?page=cari-member\">Cari Member</a></li>\n";
	echo "					<li><a href=\"index.php?page=logout\">Logout</a></li>\n";
	echo "				</ul>\n";
	echo "			</div>\n";
	echo "		</div>\n";
	echo "		<div class=\"p-right\">\n";

	if( $page == 'daftar-member' ) {
		echo "		<div class=\"box\">\n";
		echo "			<h1>Daftar Member</h1>\n";
		echo "			<p>Berikut daftar member yang terdapat di database.</p>\n";
		echo "			<table border=\"0\">\n";
		echo "			<tr class=\"head\">\n";
		echo "				<td width=\"30\" align=\"center\">No</td>\n";
		echo "				<td width=\"150\">Nama</td>\n";
		echo "				<td width=\"180\">Alamat</td>\n";
		echo "				<td width=\"90\">No HP</td>\n";
		echo "			</tr>\n";
		$sql_member = mysql_query( "SELECT * FROM tb_member" );
		if( mysql_num_rows( $sql_member ) == 0 ) {
			echo "		<tr class=\"no-data\"><td colspan=\"6\">Maaf, belum ada data member saat ini</td></tr>\n";		
		} 
		echo "			</table>\n";
		echo "			<p>Gunakan tombol Edit dan Delete untuk manipulasi data lebih lanjut.</p>\n";
		echo "		</div>\n";	
	} elseif( $page == 'tambah-member' ) {
		echo "		<div class=\"box\">\n";
		echo "			<h1>Tambah Data Member</h1>\n";
		if( isset( $_SESSION['tambah-mbr']['gagal'] ) ) {
			echo "		<div class=\"salah\">".$_SESSION['tambah-mbr']['gagal']."</div>\n";
			unset( $_SESSION['tambah-mbr']['gagal'] );
		}
		echo "			<form method=\"post\" action=\"\" autocomplete=\"off\" class=\"form\">\n";
		echo "				Kode member:<br><input type=\"text\" name=\"kode_mbr\" value=\"".AturKode( "tb_member", "kode_kar", "KR" )."\" disabled=\"disabled\"><br>\n";
		echo "				Nama member:<br><input type=\"text\" name=\"nama_mbr\" placeholder=\"Isi nama member...\" id=\"nama_mbr\" autofocus><br>\n";
		echo "				Alamat member:<br><input type=\"text\" name=\"alamat_mbr\" placeholder=\"Isi alamat member...\" id=\"alamat_mbr\"><br>\n";
		echo "				Nomor HP member:<br><input type=\"text\" name=\"nohp_member\" placeholder=\"Isi nomor rekening member...\" id=\"nohp_member\"><br>\n";
		echo "				<input type=\"submit\" name=\"act\" value=\"Simpan member\">\n";
		echo "			</form>\n";
		echo "		</div>\n";
	} elseif( $page == 'edit-member' ) {
		$editkar = mysql_fetch_array( mysql_query( "SELECT * FROM tb_member WHERE kary_id='{$kary_id}'" ) );	
		echo "		<div class=\"box\">\n";
		echo "			<h1>Edit Data member</h1>\n";
		if( isset( $_SESSION['edit-kar']['gagal'] ) ) {
			echo "		<div class=\"salah\">".$_SESSION['edit-kar']['gagal']."</div>\n";
			unset( $_SESSION['edit-kar']['gagal'] );
		}
		echo "			<form method=\"post\" action=\"\" autocomplete=\"off\" class=\"form\">\n";
		echo "				Kode member:<br><input type=\"text\" name=\"kode_mbr\" value=\"{$editkar['kode_mbr']}\" disabled=\"disabled\"><br>\n";
		echo "				Nama member:<br><input type=\"text\" name=\"nama_mbr\" value=\"{$editkar['nama_mbr']}\" placeholder=\"Isi nama member...\" id=\"nama_mbr\" autofocus><br>\n";
		echo "				Alamat member:<br><input type=\"text\" name=\"alamat_mbr\" value=\"{$editkar['alamat_mbr']}\" placeholder=\"Isi alamat member...\" id=\"alamat_mbr\"><br>\n";
		echo "				Nomor Rekening member:<br><input type=\"text\" name=\"nohp_member\" value=\"{$editkar['no_rek']}\" placeholder=\"Isi nomor rekening member...\" id=\"nohp_member\"><br>\n";
		echo "				<input type=\"submit\" name=\"act\" value=\"Edit member\">\n";
		echo "			</form>\n";
		echo "		</div>\n";
	}  elseif( $page == 'cari-member' ) {
		echo "		<div class=\"box\">\n";
		echo "			<h1>Pencarian Data member</h1>\n";
		echo "			<form method=\"post\" action=\"\" autocomplete=\"off\" class=\"form\">\n";
		echo "				<input type=\"text\" name=\"kata\" id=\"kata\" placeholder=\"Ketik kata kunci pencarian berdasarkan nama, kode...\" autofocus><br>\n";
		echo "				<input type=\"submit\" name=\"act\" value=\"Cari Data\">\n";
		echo "			</form>\n";
		echo "		</div>\n";
		if( $act == 'Cari Data' ) {
			$kata = isset( $_POST['kata'] ) ? $_POST['kata'] : '';
			$katas = ( $kata == "" ) ? "Kata Kunci Pencarian Tidak Disebutkan" : $kata;
			$cari = mysql_query( "SELECT * FROM tb_member WHERE nama_kar LIKE '%$kata%' OR kode_kar LIKE '%$kata%' OR gol_kar LIKE '%$kata%'" );
			echo "		<div class=\"box\">\n";
			echo "			<h1>Daftar Hasil Pencarian member</h1>\n";
			echo "			<p>Kata Kunci: <b>{$katas}</b> | Jumlah Data: <b>".mysql_num_rows( $cari )."</b> Data</p>\n";
			echo "			<table border=\"0\">\n";
			echo "			<tr class=\"head\">\n";
			echo "				<td width=\"30\" align=\"center\">No</td>\n";
			echo "				<td width=\"150\">Nama</td>\n";
			echo "				<td width=\"180\">Alamat</td>\n";
			echo "			</tr>\n";
			if( mysql_num_rows( $cari ) == 0 ) {
				echo "		<tr class=\"no-data\"><td colspan=\"6\">Maaf, belum ada data member saat ini</td></tr>\n";		
			} else {
				$no = 1;
				while( $datacari = mysql_fetch_array( $cari ) ) {
					echo "	<tr class=\"data\">\n";
					echo "		<td align=\"center\">{$no}</td>\n";
					echo "		<td><a href=\"".URL."/index.php?page=transfer-gaji&kary_id={$datacari['kary_id']}\" title=\"Transfer Gaji &rarr; {$datacari['nama_mbr']}\">{$datacari['nama_mbr']}</a></td>\n";
					echo "		<td>{$datacari['alamat_mbr']}</td>\n";
					echo "		<td align=\"center\">{$datacari['nohp_member']}</td>\n";
					echo "	</tr>\n";
					$no++;
				}
			}
			echo "			</table>\n";
			echo "			<p>Hasil pencarian data.</p>\n";
			echo "		</div>\n";
		}
	} else {
		echo "		<div class=\"box\">\n";
		echo "			<h1>Selamat Datang di Program Penggajian PT. Bluth Company</h1>\n";
		echo "			<p>Program ini merupakan sebagai prasyarat utama bagi mahasiswa dalam menyelesaikan mata kuliah Perancangan dan Pemrograman Web yang diselenggarakan di Kampus Contoh-TA.</p>\n";
		echo "			<p>Pada program ini, dikembangkan suatu sistem sederhana untuk mengolah data member beserta dengan proses penggajiannya dimana sistem dapat menghitung total uang lembur secara otomatis. Berikut ini adalah daftar fitur-fitur yang dimasukkan ke dalam program ini:</p>\n";
		echo "			<ul class=\"fitur\">\n";
		echo "				<li>Fitur login dan logout bagi user terdaftar</li>\n";
		echo "				<li>Fitur tambah data member</li>\n";
		echo "				<li>Fitur edit data member</li>\n";
		echo "				<li>Fitur hapus data member</li>\n";
		echo "				<li>Fitur pencarian data member</li>\n";
		echo "			</ul>\n";
		
		echo "			<p>Demikianlah kiranya dengan adanya program ini dapat memberikan wawasan dan pengetahuan baru bagi kita semua.</p>\n";
		echo "		</div>\n";	
	}
	echo "		</div>\n";
	echo "		<div class=\"clear\"></div>\n";
	echo "	</div>\n";
	echo "	<div class=\"footer\">\n";
	echo "		All Rights Reserved | Copyright &copy; - ".date("Y")." | Kelompok 19  Tubes RPL-OOT\n";
	echo "	</div>\n";
	echo "</div>\n";	
} else {
	// user sama sekali belum login, tampilkan form login
	echo "<div class=\"login-box\">\n";
	echo "	<div class=\"login-logo\">\n";
	echo "		<img src=\"".URL."/images/tu.png\" alt=\"Logo\">\n";
	echo "	</div>\n";
	echo "	<div class=\"login-form\">\n";
	echo "		<div class=\"login-info\">Silahkan login dengan mengisi username dan password</div>\n";
	echo "		<form method=\"post\" action=\"\" name=\"login\" autocomplete=\"off\">\n";
	echo "			<input type=\"text\" name=\"username\" placeholder=\"Ketik Username...\" id=\"username\" autofocus><br>\n";
	echo "			<input type=\"password\" name=\"password\" placeholder=\"Ketik Password...\" id=\"password\"><br>\n";
	echo "			<input type=\"submit\" name=\"act\" value=\"Register\" onclick=\"cek_login();\">\n";
	echo "			<input type=\"submit\" name=\"act\" value=\"User Login\" onclick=\"cek_login();\">\n";
	echo "		</form>\n";
	if( isset( $_SESSION['login']['gagal'] ) ) {
		echo "	<div class=\"error-login\">".$_SESSION['login']['gagal']."</div>\n";
		unset( $_SESSION['login']['gagal'] );
	}
	echo "	</div>\n";
	echo "	<div class=\"copy\">All Rights Reserved | Copyright &copy; - ".date("Y")." | Kelompok 19  Tubes RPL-OOT</div>\n";
	echo "</div>\n";
}
?>


</body>
</html>