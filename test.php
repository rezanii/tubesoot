<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Peta Indonesia </title>
      <!-- Mobile Specific 
    =============================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Main CSS Files
    =============================================== -->
    <link href="css/bootstrap-combined.min.css" rel="stylesheet">


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="description" content="Media alternatif informasi Gunung Api di Indonesia dan dunia">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8sJTQm0yLxr5M49ZzrRVJuPVbBnA3Bto&sensor=true"></script>


    <!--  initialize google maps  -->

    <script type="text/javascript">
        var infowindow = null;
            $(document).ready(function () { initialize();  });

            function initialize() {

                var centerMap = new google.maps.LatLng(-2.28,115);   

                var myOptions = {
                    zoom: 5,
                    center: centerMap,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                setMarkers(map, sites);
                infowindow = new google.maps.InfoWindow({
                        content: "loading..."
                    });

                var bikeLayer = new google.maps.BicyclingLayer();
                bikeLayer.setMap(map);
            }
           
             var sites = [ ['Cereme',-6.892,108.4,224, 'Gunung: Cereme<br/>Longitude: 108.4<br/>Latitude: -6.892<br/>Last Eruption: 1951<br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Talang',-0.978,100.679,1241, 'Gunung: Talang<br/>Longitude: 100.679<br/>Latitude: -0.978<br/>Last Eruption: 2007<br/>Subregion: Sumatra<br/>Region: Indonesia<br/>'],['Tambora',-8.25,118,1243, 'Gunung: Tambora<br/>Longitude: 118<br/>Latitude: -8.25<br/>Last Eruption: 1880<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/>'],['Tampomas',-6.77,107.95,1244, 'Gunung: Tampomas<br/>Longitude: 107.95<br/>Latitude: -6.77<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Tandikat',-0.433,100.317,1247, 'Gunung: Tandikat<br/>Longitude: 100.317<br/>Latitude: -0.433<br/>Last Eruption: 1924<br/>Subregion: Sumatra<br/>Region: Indonesia<br/>'],['Tangkubanparahu',-6.77,107.6,1249, 'Gunung: Tangkubanparahu<br/>Longitude: 107.6<br/>Latitude: -6.77<br/>Last Eruption: 1985<br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Tara, Batu',-7.792,123.579,1251, 'Gunung: Tara, Batu<br/>Longitude: 123.579<br/>Latitude: -7.792<br/>Last Eruption: 2010<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/>'],['Tarakan',1.83,127.83,1252, 'Gunung: Tarakan<br/>Longitude: 127.83<br/>Latitude: 1.83<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/>'],['Telomoyo',-7.37,110.4,1267, 'Gunung: Telomoyo<br/>Longitude: 110.4<br/>Latitude: -7.37<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Telong, Bur ni',4.769,96.821,1268, 'Gunung: Telong, Bur ni<br/>Longitude: 96.821<br/>Latitude: 4.769<br/>Last Eruption: 1919<br/>Subregion: Sumatra<br/>Region: Indonesia<br/>'],['Tengger Caldera',-7.942,112.95,1272, 'Gunung: Tengger Caldera<br/>Longitude: 112.95<br/>Latitude: -7.942<br/>Last Eruption: 2011<br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Teon',-6.92,129.125,1274, 'Gunung: Teon<br/>Longitude: 129.125<br/>Latitude: -6.92<br/>Last Eruption: 1904<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/>'],['Tidore',0.658,127.4,1283, 'Gunung: Tidore<br/>Longitude: 127.4<br/>Latitude: 0.658<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/>'],['Toba',2.58,98.83,1296, 'Gunung: Toba<br/>Longitude: 98.83<br/>Latitude: 2.58<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/>'],['Tongkoko',1.52,125.2,1314, 'Gunung: Tongkoko<br/>Longitude: 125.2<br/>Latitude: 1.52<br/>Last Eruption: 1846<br/>Subregion: Sulawesi<br/>Region: Indonesia<br/>'],['Ungaran',-7.18,110.33,1368, 'Gunung: Ungaran<br/>Longitude: 110.33<br/>Latitude: -7.18<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Wayang-Windu',-7.208,107.63,1475, 'Gunung: Wayang-Windu<br/>Longitude: 107.63<br/>Latitude: -7.208<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Wilis',-7.808,111.758,1483, 'Gunung: Wilis<br/>Longitude: 111.758<br/>Latitude: -7.808<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Wurlali',-7.125,128.675,1487, 'Gunung: Wurlali<br/>Longitude: 128.675<br/>Latitude: -7.125<br/>Last Eruption: 1892<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/>'],['Yersey',-7.53,123.95,1499, 'Gunung: Yersey<br/>Longitude: 123.95<br/>Latitude: -7.53<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/>'],['Papandayan',-7.32,107.73,957, 'Gunung: Papandayan<br/>Longitude: 107.73<br/>Latitude: -7.32<br/>Last Eruption: 2002<br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Malabar',-7.13,107.65,756, 'Gunung: Malabar<br/>Longitude: 107.65<br/>Latitude: -7.13<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/756">View Detail</a>'],['Malabar',-7.13,107.65,756, 'Gunung: Malabar<br/>Longitude: 107.65<br/>Latitude: -7.13<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Gede',-6.78,106.98,425, 'Gunung: Gede<br/>Longitude: 106.98<br/>Latitude: -6.78<br/>Last Eruption: 1949<br/>Subregion: Java<br/>Region: Indonesia<br/>'],['Salak',-6.72,106.73,1072, 'Gunung: Salak<br/>Longitude: 106.73<br/>Latitude: -6.72<br/>Last Eruption: 1935<br/>Subregion: Java<br/>Region: Indonesia<br/>'] ];
            


            function setMarkers(map, markers) {

                for (var i = 0; i < markers.length; i++) {
                    var sites = markers[i];
                    var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);

                     var contentString = sites[4];

                    var marker = new google.maps.Marker({
                        position: siteLatLng,
                        map: map,
                        icon: '/tubesoot/images/markers.png',
                        title: sites[0],
                        zIndex: sites[3],
                        html: contentString
                    });    

                    google.maps.event.addListener(marker, "click", function () {
                        infowindow.setContent(this.html);
                        infowindow.open(map, this);
                    });
                }
            }
        </script>



<style type="text/css">
h1 {
    font: 400 50px/1.1 Georgia, serif;
}
p {
    font: 400 12px/1.6 Verdana, Helvetica, sans-serif;
}
</style>
</head>
<body>

<!-- Navbar -->
     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </a>

         <a class="brand" href="/"> Sistem Informasi Pengendalian Dini dan Deteksi Gempa di Jawa Barat </a>
         <div class="nav-collapse collapse">
          <ul class="nav pull-right">
           <li><a href="/tubesoot/test.php"class="scroller" data-section="#">Informasi Gempa</a></li>
           <li><a href="/tubesoot/gempa.php" class="scroller" data-section="#">Data Gempa Terakhir</a></li>
           <li><a href="/tubesoot/datagempabaru.php" class="scroller">Data Gempa </a></li>
           <li><a href="" class="scroller" data-section="#contact">Pengendalian Dini</a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 
 <br/><br/><br/><br/><br/>


<div class="container">
        <div class="row">    
                <div class="span12">
                     <h1>Informasi Gempa Bumi di Jawa Barat</h1>
                     <p>&nbsp;&nbsp;&nbsp;&nbsp; Informasi Gempa Bumi di Jawa Barat.</p>
                     <hr/>
                </div>

                <div class="span12">
                <div id="map_canvas" style="height:500px;"></div>
                <hr/>
                </div>

              
                <div class="span3" style="text-align:left" >

					<?php
					$url = "http://www.bmkg.go.id/webXML/en_autogempa.xml";
					$sUrl = file_get_contents($url, False);
					$xml = simplexml_load_string($sUrl);
					?>
					
				<table border="1" cellpadding="4" cellspacing="0" style="border-collapse:collapse;" width="500">
					<tr>
					<th colspan="3" sty	le="text-align:center" >Data Gempa Terakhir</th>
					</tr>
					<tr>
					<td>Tanggal / Jam</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Tanggal;?> / <?php echo $xml->gempa->Jam;?></td>
					</tr>
					<tr>
					<td>Lintang</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Lintang;?></td>
					</tr>
					<tr>
					<td>Bujur</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Bujur;?></td>
					</tr>
					<tr>
					<td>Magnitude</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Magnitude;?></td>
					</tr>
					<tr>
					<td>Data Wilayah</td>
					<td>:</td>
					<td><ul>
					<li><?php echo $xml->gempa->Wilayah1;?></li>
					<li><?php echo $xml->gempa->Wilayah2;?></li>
					<li><?php echo $xml->gempa->Wilayah3;?></li>
					<li><?php echo $xml->gempa->Wilayah4;?></li>
					<li><?php echo $xml->gempa->Wilayah5;?></li>
					</ul></td>
					</tr>
					<tr>
					<td>Keterangan</td>
					<td>:</td>
					<td><?php echo $xml->gempa->Potensi;?></td>
					</tr>
					<tr>
					<td>Maps</td>
					<td>:</td>
					<td><img src="/tubesoot/data/eqmap.gif"></td>
					</tr>
				</table>
				</div>
				
				
				<div class="span12" style="text-align:left">
					<h1> Gempa Bumi </h1>
                    <p>
					Gempa bumi adalah getaran atau guncangan yang terjadi di permukaan bumi akibat pelepasan energi dari dalam secara tiba-tiba yang menciptakan gelombang seismik. 
					Gempa Bumi biasa disebabkan oleh pergerakan kerak Bumi (lempeng Bumi).Frekuensi suatu wilayah, mengacu pada jenis dan ukuran gempa Bumi yang di alami selama periode waktu.
					Akumulasi energi penyebab terjadinya gempabumi dihasilkan dari pergerakan lempeng-lempeng tektonik. Energi yang dihasilkan dipancarkan kesegala arah berupa gelombang gempabumi sehingga efeknya dapat dirasakan sampai ke permukaan bumi.
					 Gempa Bumi biasa disebabkan oleh pergerakan kerak Bumi (lempeng Bumi). Frekuensi suatu wilayah, mengacu pada jenis dan ukuran gempa Bumi yang di alami selama periode waktu. Gempa Bumi diukur dengan menggunakan alat Seismometer. 
					 Moment magnitudo adalah skala yang paling umum di mana gempa Bumi terjadi untuk seluruh dunia. Skala Rickter adalah skala yang di laporkan oleh observatorium seismologi nasional yang di ukur pada skala besarnya lokal 5 magnitude. 
					 kedua skala yang sama selama rentang angka mereka valid. gempa 3 magnitude atau lebih sebagian besar hampir tidak terlihat dan besar nya 7 lebih berpotensi menyebabkan kerusakan serius di daerah yang luas, tergantung pada kedalaman gempa. 
					 Gempa Bumi terbesar bersejarah besarnya telah lebih dari 9, meskipun tidak ada batasan besarnya.
					</p>
					
                    <hr/>
                </div>
				
				
				<div class="span12" style="text-align:left">
					<h1> Jalur Gempa Dunia </h1>
                    <p>
					<img src="/tubesoot/images/jalur.png"> </br></br>
					Indonesia merupakan daerah rawan gempabumi karena dilalui oleh jalur pertemuan 3 lempeng tektonik, yaitu: Lempeng Indo-Australia, lempeng Eurasia, dan lempeng Pasifik. 
					Lempeng Indo-Australia bergerak relatip ke arah utara dan menyusup kedalam lempeng Eurasia, sementara lempeng Pasifik bergerak relatip ke arah barat. 
					Jalur pertemuan lempeng berada di laut sehingga apabila terjadi gempabumi besar dengan kedalaman dangkal maka akan berpotensi menimbulkan tsunami sehingga Indonesia juga rawan tsunami. 
					Belajar dari pengalaman kejadian gempabumi dan tsunami di Aceh, Pangandaran dan daerah lainnya yang telah mengakibatkan korban ratusan ribu jiwa serta kerugian harta benda yang tidak sedikit, maka sangat diperlukan upaya-upaya mitigasi baik ditingkat pemerintah maupun masyarakat untuk mengurangi resiko akibat bencana gempabumi dan tsunami. 
					Mengingat terdapat selang waktu antara terjadinya gempabumi dengan tsunami maka selang waktu tersebut dapat digunakan untuk memberikan peringatan dini kepada masyarakat sebagai salah satu upaya mitigasi bencana tsunami dengan membangun Sistem Peringatan Dini Tsunami Indonesia (Indonesia Tsunami Early Warning System / Ina-TEWS).
					</p>
                    <hr/>
                </div>

                <div class="span12" style="text-align:right">
                   <a class="btn btn-info" href="/tubesoot/asset/submit_info.htm">Kirim Informasi disini</a>
                     <hr/>
                </div>

                
 
        </div>
</div>

</body>
</html>