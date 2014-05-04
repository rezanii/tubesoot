<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Gempa Indonesia</title>
<script type="text/javascript" src="js/jquery.js"></script><!-- memanggail library jquery -->
	<script type="text/javascript" src="js/ticker.js"></script><!-- memanggil library ticker jquery -->
<!-- Transisi dengan jenis fade, anda bisa mengganti fade menjadi slide -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#fade').list_ticker({
			speed:4000,
			effect:'fade'
		});	
	})
	</script>
	<!-- Style -->
<style type="text/css">
.box {
	width:30%;
	margin:0 auto;
	background-color:#CCC;
	padding:4px;
	min-height:100px;
	font-family:Tahoma, Geneva, sans-serif;
}
.box .judul {
	font-size:14px; font-weight:bold;
}
.box ul {
	list-style:none;
	font-size:12px;
}
</style>
</head>
<body>
<div class="box">
<div class="judul">Informasi Gempa Terkini</div>
<ul style="height: 14px;" id="fade"> <!-- memanggil transisi fade dari jquery -->
<?php
$tampiljumlah = 10; //membatasi jumlah data yang akan ditampilkan
$hitung = 1; // dimulai dari data 1
if( !$xml = simplexml_load_file('http://data.bmkg.go.id/en_gempaterkini.xml') ) //menggunakan fungsi simple load xml untuk memparsing data xml
    {
        echo 'Gagal Membuka XML-nya Om! ';
    }
    else
    {
		foreach( $xml as $record )//parsing xml menjadi objek dan diulang sampai $tampiljumlah kali
        { 
			$waktu = $record->Tanggal; //data waktu
			$jam = $record->Jam; // data jam
			$skala = $record->Magnitude; // data skala gempa
			$wil = $record->Wilayah; // data wilayah gempa
		?>
		<!-- mencetak data -->
		<li style="display: list-item;">
        <strong>Waktu Gempa</strong> : <?php print $waktu; ?> - <?php print $jam ?>
        <br />
		<strong>Lokasi</strong> : <?php print $wil ?><br />
        <strong>Kekuatan</strong> : <?php print $skala ?>
        </li>
        <?php
		//membatasi jumlah data yang ditampilkan
		if ($hitung == $tampiljumlah) break;
		else $hitung++;
		}
	}
?>
</ul>
</div>
</body>
</html>