<?php
session_start();

?>



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
	<link rel="stylesheet" type="text/css" href="css/style.css" />


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="description" content="Media alternatif informasi Gunung Api di Indonesia dan dunia">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8sJTQm0yLxr5M49ZzrRVJuPVbBnA3Bto&sensor=true"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB8sJTQm0yLxr5M49ZzrRVJuPVbBnA3Bto&sensor=false">
</script>

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
           
             var sites = [ ['Agung',-8.342,115.508,14, 'Gunung: Agung<br/>Longitude: 115.508<br/>Latitude: -8.342<br/>Last Eruption: 1964<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/14">View Detail</a>'],['Amasing',-0.53,127.48,39, 'Gunung: Amasing<br/>Longitude: 127.48<br/>Latitude: -0.53<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/39">View Detail</a>'],['Ambang',0.75,124.42,41, 'Gunung: Ambang<br/>Longitude: 124.42<br/>Latitude: 0.75<br/>Last Eruption: <br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/41">View Detail</a>'],['Arjuno-Welirang',-7.725,112.58,77, 'Gunung: Arjuno-Welirang<br/>Longitude: 112.58<br/>Latitude: -7.725<br/>Last Eruption: 1991<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/77">View Detail</a>'],['Awu',3.67,125.5,98, 'Gunung: Awu<br/>Longitude: 125.5<br/>Latitude: 3.67<br/>Last Eruption: 2004<br/>Subregion: Sangihe Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/98">View Detail</a>'],['Baluran',-7.85,114.37,118, 'Gunung: Baluran<br/>Longitude: 114.37<br/>Latitude: -7.85<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/118">View Detail</a>'],['Banda Api',-4.525,129.871,123, 'Gunung: Banda Api<br/>Longitude: 129.871<br/>Latitude: -4.525<br/>Last Eruption: 1988<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/123">View Detail</a>'],['Banua Wuhu',3.138,125.491,125, 'Gunung: Banua Wuhu<br/>Longitude: 125.491<br/>Latitude: 3.138<br/>Last Eruption: 1919<br/>Subregion: Sangihe Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/125">View Detail</a>'],['Batur',-8.242,115.375,134, 'Gunung: Batur<br/>Longitude: 115.375<br/>Latitude: -8.242<br/>Last Eruption: 2000<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/134">View Detail</a>'],['Belirang-Beriti',-2.82,102.18,141, 'Gunung: Belirang-Beriti<br/>Longitude: 102.18<br/>Latitude: -2.82<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/141">View Detail</a>'],['Besar',-4.43,103.67,147, 'Gunung: Besar<br/>Longitude: 103.67<br/>Latitude: -4.43<br/>Last Eruption: 1940<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/147">View Detail</a>'],['Bibinoi',-0.77,127.72,149, 'Gunung: Bibinoi<br/>Longitude: 127.72<br/>Latitude: -0.77<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/149">View Detail</a>'],['Bratan',-8.28,115.13,182, 'Gunung: Bratan<br/>Longitude: 115.13<br/>Latitude: -8.28<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/182">View Detail</a>'],['Cereme',-6.892,108.4,224, 'Gunung: Cereme<br/>Longitude: 108.4<br/>Latitude: -6.892<br/>Last Eruption: 1951<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/224">View Detail</a>'],['Colo [Una Una]',-0.17,121.608,268, 'Gunung: Colo [Una Una]<br/>Longitude: 121.608<br/>Latitude: -0.17<br/>Last Eruption: 1983<br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/268">View Detail</a>'],['Daun, Bukit',-3.38,102.37,313, 'Gunung: Daun, Bukit<br/>Longitude: 102.37<br/>Latitude: -3.38<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/313">View Detail</a>'],['Dempo',-4.03,103.13,318, 'Gunung: Dempo<br/>Longitude: 103.13<br/>Latitude: -4.03<br/>Last Eruption: 2009<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/318">View Detail</a>'],['Dieng Volcanic Complex',-7.2,109.92,327, 'Gunung: Dieng Volcanic Complex<br/>Longitude: 109.92<br/>Latitude: -7.2<br/>Last Eruption: 2009<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/327">View Detail</a>'],['Dukono',1.68,127.88,338, 'Gunung: Dukono<br/>Longitude: 127.88<br/>Latitude: 1.68<br/>Last Eruption: 2011<br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/338">View Detail</a>'],['Ebulobo',-8.82,121.18,349, 'Gunung: Ebulobo<br/>Longitude: 121.18<br/>Latitude: -8.82<br/>Last Eruption: 1924<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/349">View Detail</a>'],['Egon',-8.67,122.45,355, 'Gunung: Egon<br/>Longitude: 122.45<br/>Latitude: -8.67<br/>Last Eruption: 2008<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/355">View Detail</a>'],['Emperor of China',-6.62,124.22,361, 'Gunung: Emperor of China<br/>Longitude: 124.22<br/>Latitude: -6.62<br/>Last Eruption: 1927<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/361">View Detail</a>'],['Galunggung',-7.25,108.058,413, 'Gunung: Galunggung<br/>Longitude: 108.058<br/>Latitude: -7.25<br/>Last Eruption: 1984<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/413">View Detail</a>'],['Gamalama',0.8,127.33,414, 'Gunung: Gamalama<br/>Longitude: 127.33<br/>Latitude: 0.8<br/>Last Eruption: 2007<br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/414">View Detail</a>'],['Gamkonora',1.38,127.53,416, 'Gunung: Gamkonora<br/>Longitude: 127.53<br/>Latitude: 1.38<br/>Last Eruption: 2007<br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/416">View Detail</a>'],['Gede',-6.78,106.98,425, 'Gunung: Gede<br/>Longitude: 106.98<br/>Latitude: -6.78<br/>Last Eruption: 1949<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/425">View Detail</a>'],['Guntur',-7.143,107.84,458, 'Gunung: Guntur<br/>Longitude: 107.84<br/>Latitude: -7.143<br/>Last Eruption: 1847<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/458">View Detail</a>'],['Gunungapi Wetar',-6.642,126.65,459, 'Gunung: Gunungapi Wetar<br/>Longitude: 126.65<br/>Latitude: -6.642<br/>Last Eruption: 1699<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/459">View Detail</a>'],['Hiri',0.9,127.32,488, 'Gunung: Hiri<br/>Longitude: 127.32<br/>Latitude: 0.9<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/488">View Detail</a>'],['Hulubelu',-5.35,104.6,508, 'Gunung: Hulubelu<br/>Longitude: 104.6<br/>Latitude: -5.35<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/508">View Detail</a>'],['Hutapanjang',-2.33,101.6,511, 'Gunung: Hutapanjang<br/>Longitude: 101.6<br/>Latitude: -2.33<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/511">View Detail</a>'],['Ibu',1.488,127.63,513, 'Gunung: Ibu<br/>Longitude: 127.63<br/>Latitude: 1.488<br/>Last Eruption: 2011<br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/513">View Detail</a>'],['Ijen',-8.058,114.242,518, 'Gunung: Ijen<br/>Longitude: 114.242<br/>Latitude: -8.058<br/>Last Eruption: 2002<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/518">View Detail</a>'],['Iliboleng',-8.342,123.258,521, 'Gunung: Iliboleng<br/>Longitude: 123.258<br/>Latitude: -8.342<br/>Last Eruption: 1993<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/521">View Detail</a>'],['Ililabalekan',-8.55,123.38,522, 'Gunung: Ililabalekan<br/>Longitude: 123.38<br/>Latitude: -8.55<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/522">View Detail</a>'],['Ilimuda',-8.478,122.671,523, 'Gunung: Ilimuda<br/>Longitude: 122.671<br/>Latitude: -8.478<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/523">View Detail</a>'],['Iliwerung',-8.53,123.57,524, 'Gunung: Iliwerung<br/>Longitude: 123.57<br/>Latitude: -8.53<br/>Last Eruption: 1999<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/524">View Detail</a>'],['Imun',2.158,98.93,529, 'Gunung: Imun<br/>Longitude: 98.93<br/>Latitude: 2.158<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/529">View Detail</a>'],['Inielika',-8.73,120.98,536, 'Gunung: Inielika<br/>Longitude: 120.98<br/>Latitude: -8.73<br/>Last Eruption: 2001<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/536">View Detail</a>'],['Inierie',-8.875,120.95,537, 'Gunung: Inierie<br/>Longitude: 120.95<br/>Latitude: -8.875<br/>Last Eruption: -8050<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/537">View Detail</a>'],['Iya',-8.897,121.645,559, 'Gunung: Iya<br/>Longitude: 121.645<br/>Latitude: -8.897<br/>Last Eruption: 1971<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/559">View Detail</a>'],['Iyang-Argapura',-7.97,113.57,560, 'Gunung: Iyang-Argapura<br/>Longitude: 113.57<br/>Latitude: -7.97<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/560">View Detail</a>'],['Jailolo',1.08,127.42,565, 'Gunung: Jailolo<br/>Longitude: 127.42<br/>Latitude: 1.08<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/565">View Detail</a>'],['Kaba',-3.52,102.62,576, 'Gunung: Kaba<br/>Longitude: 102.62<br/>Latitude: -3.52<br/>Last Eruption: 2000<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/576">View Detail</a>'],['Karaha, Kawah',-7.12,108.08,593, 'Gunung: Karaha, Kawah<br/>Longitude: 108.08<br/>Latitude: -7.12<br/>Last Eruption: 1861<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/593">View Detail</a>'],['Karang',-6.27,106.042,594, 'Gunung: Karang<br/>Longitude: 106.042<br/>Latitude: -6.27<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/594">View Detail</a>'],['Karangetang [Api Siau]',2.78,125.4,595, 'Gunung: Karangetang [Api Siau]<br/>Longitude: 125.4<br/>Latitude: 2.78<br/>Last Eruption: 2010<br/>Subregion: Sangihe Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/595">View Detail</a>'],['Kawi-Butak',-7.92,112.45,611, 'Gunung: Kawi-Butak<br/>Longitude: 112.45<br/>Latitude: -7.92<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/611">View Detail</a>'],['Kelimutu',-8.77,121.82,614, 'Gunung: Kelimutu<br/>Longitude: 121.82<br/>Latitude: -8.77<br/>Last Eruption: 1968<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/614">View Detail</a>'],['Kelut',-7.93,112.308,617, 'Gunung: Kelut<br/>Longitude: 112.308<br/>Latitude: -7.93<br/>Last Eruption: 2008<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/617">View Detail</a>'],['Kendang',-7.23,107.72,618, 'Gunung: Kendang<br/>Longitude: 107.72<br/>Latitude: -7.23<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/618">View Detail</a>'],['Kerinci',-1.697,101.264,620, 'Gunung: Kerinci<br/>Longitude: 101.264<br/>Latitude: -1.697<br/>Last Eruption: 2009<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/620">View Detail</a>'],['Klabat',1.47,125.03,640, 'Gunung: Klabat<br/>Longitude: 125.03<br/>Latitude: 1.47<br/>Last Eruption: <br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/640">View Detail</a>'],['Krakatau',-6.102,105.423,662, 'Gunung: Krakatau<br/>Longitude: 105.423<br/>Latitude: -6.102<br/>Last Eruption: 2011<br/>Subregion: Krakatau<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/662">View Detail</a>'],['Kunyit',-2.274,101.483,675, 'Gunung: Kunyit<br/>Longitude: 101.483<br/>Latitude: -2.274<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/675">View Detail</a>'],['Lamongan',-7.979,113.342,692, 'Gunung: Lamongan<br/>Longitude: 113.342<br/>Latitude: -7.979<br/>Last Eruption: 1898<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/692">View Detail</a>'],['Lawu',-7.625,111.192,704, 'Gunung: Lawu<br/>Longitude: 111.192<br/>Latitude: -7.625<br/>Last Eruption: 1885<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/704">View Detail</a>'],['Leroboleng',-8.358,122.842,708, 'Gunung: Leroboleng<br/>Longitude: 122.842<br/>Latitude: -8.358<br/>Last Eruption: 2003<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/708">View Detail</a>'],['Lewotobi',-8.542,122.775,712, 'Gunung: Lewotobi<br/>Longitude: 122.775<br/>Latitude: -8.542<br/>Last Eruption: 2003<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/712">View Detail</a>'],['Lewotolo',-8.272,123.505,713, 'Gunung: Lewotolo<br/>Longitude: 123.505<br/>Latitude: -8.272<br/>Last Eruption: 1920<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/713">View Detail</a>'],['Lokon-Empung',1.358,124.792,725, 'Gunung: Lokon-Empung<br/>Longitude: 124.792<br/>Latitude: 1.358<br/>Last Eruption: 2003<br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/725">View Detail</a>'],['Lubukraya',1.478,99.209,737, 'Gunung: Lubukraya<br/>Longitude: 99.209<br/>Latitude: 1.478<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/737">View Detail</a>'],['Lumut Balai, Bukit',-4.22,103.62,738, 'Gunung: Lumut Balai, Bukit<br/>Longitude: 103.62<br/>Latitude: -4.22<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/738">View Detail</a>'],['Lurus',-7.73,113.58,740, 'Gunung: Lurus<br/>Longitude: 113.58<br/>Latitude: -7.73<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/740">View Detail</a>'],['Mahawu',1.358,124.858,751, 'Gunung: Mahawu<br/>Longitude: 124.858<br/>Latitude: 1.358<br/>Last Eruption: 1977<br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/751">View Detail</a>'],['Makian',0.32,127.4,754, 'Gunung: Makian<br/>Longitude: 127.4<br/>Latitude: 0.32<br/>Last Eruption: 1988<br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/754">View Detail</a>'],['Malabar',-7.13,107.65,756, 'Gunung: Malabar<br/>Longitude: 107.65<br/>Latitude: -7.13<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/756">View Detail</a>'],['Malang Plain',-8.02,112.68,757, 'Gunung: Malang Plain<br/>Longitude: 112.68<br/>Latitude: -8.02<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/757">View Detail</a>'],['Malintang',0.47,99.67,761, 'Gunung: Malintang<br/>Longitude: 99.67<br/>Latitude: 0.47<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/761">View Detail</a>'],['Manuk',-5.53,130.292,772, 'Gunung: Manuk<br/>Longitude: 130.292<br/>Latitude: -5.53<br/>Last Eruption: <br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/772">View Detail</a>'],['Marapi',-0.381,100.473,774, 'Gunung: Marapi<br/>Longitude: 100.473<br/>Latitude: -0.381<br/>Last Eruption: 2004<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/774">View Detail</a>'],['Mare',0.57,127.4,776, 'Gunung: Mare<br/>Longitude: 127.4<br/>Latitude: 0.57<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/776">View Detail</a>'],['Merapi',-7.542,110.442,813, 'Gunung: Merapi<br/>Longitude: 110.442<br/>Latitude: -7.542<br/>Last Eruption: 2010<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/813">View Detail</a>'],['Merbabu',-7.45,110.43,814, 'Gunung: Merbabu<br/>Longitude: 110.43<br/>Latitude: -7.45<br/>Last Eruption: 1797<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/814">View Detail</a>'],['Moti',0.45,127.4,846, 'Gunung: Moti<br/>Longitude: 127.4<br/>Latitude: 0.45<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/846">View Detail</a>'],['Muria',-6.62,110.88,854, 'Gunung: Muria<br/>Longitude: 110.88<br/>Latitude: -6.62<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/854">View Detail</a>'],['Ndete Napu',-8.72,121.78,870, 'Gunung: Ndete Napu<br/>Longitude: 121.78<br/>Latitude: -8.72<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/870">View Detail</a>'],['Nieuwerkerk',-6.6,124.675,886, 'Gunung: Nieuwerkerk<br/>Longitude: 124.675<br/>Latitude: -6.6<br/>Last Eruption: 1927<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/886">View Detail</a>'],['Nila',-6.73,129.5,892, 'Gunung: Nila<br/>Longitude: 129.5<br/>Latitude: -6.73<br/>Last Eruption: 1968<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/892">View Detail</a>'],['Paluweh',-8.32,121.708,952, 'Gunung: Paluweh<br/>Longitude: 121.708<br/>Latitude: -8.32<br/>Last Eruption: 1985<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/952">View Detail</a>'],['Papandayan',-7.32,107.73,957, 'Gunung: Papandayan<br/>Longitude: 107.73<br/>Latitude: -7.32<br/>Last Eruption: 2002<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/957">View Detail</a>'],['Patah',-4.27,103.3,961, 'Gunung: Patah<br/>Longitude: 103.3<br/>Latitude: -4.27<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/961">View Detail</a>'],['Patuha',-7.16,107.4,963, 'Gunung: Patuha<br/>Longitude: 107.4<br/>Latitude: -7.16<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/963">View Detail</a>'],['Penanggungan',-7.62,112.63,970, 'Gunung: Penanggungan<br/>Longitude: 112.63<br/>Latitude: -7.62<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/970">View Detail</a>'],['Pendan',-2.82,102.02,971, 'Gunung: Pendan<br/>Longitude: 102.02<br/>Latitude: -2.82<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/971">View Detail</a>'],['Perbakti-Gagak',-6.75,106.7,973, 'Gunung: Perbakti-Gagak<br/>Longitude: 106.7<br/>Latitude: -6.75<br/>Last Eruption: 1939<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/973">View Detail</a>'],['Peuet Sague',4.914,96.329,976, 'Gunung: Peuet Sague<br/>Longitude: 96.329<br/>Latitude: 4.914<br/>Last Eruption: 2000<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/976">View Detail</a>'],['Poco Leok',-8.68,120.48,993, 'Gunung: Poco Leok<br/>Longitude: 120.48<br/>Latitude: -8.68<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/993">View Detail</a>'],['Pulosari',-6.342,105.975,1006, 'Gunung: Pulosari<br/>Longitude: 105.975<br/>Latitude: -6.342<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1006">View Detail</a>'],['Rajabasa',-5.78,105.625,1026, 'Gunung: Rajabasa<br/>Longitude: 105.625<br/>Latitude: -5.78<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1026">View Detail</a>'],['Ranakah',-8.62,120.52,1027, 'Gunung: Ranakah<br/>Longitude: 120.52<br/>Latitude: -8.62<br/>Last Eruption: 1991<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1027">View Detail</a>'],['Ranau',-4.83,103.92,1028, 'Gunung: Ranau<br/>Longitude: 103.92<br/>Latitude: -4.83<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1028">View Detail</a>'],['Raung',-8.125,114.042,1031, 'Gunung: Raung<br/>Longitude: 114.042<br/>Latitude: -8.125<br/>Last Eruption: 2008<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1031">View Detail</a>'],['Rinjani',-8.42,116.47,1042, 'Gunung: Rinjani<br/>Longitude: 116.47<br/>Latitude: -8.42<br/>Last Eruption: 2010<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1042">View Detail</a>'],['Ruang',2.3,125.37,1055, 'Gunung: Ruang<br/>Longitude: 125.37<br/>Latitude: 2.3<br/>Last Eruption: 2002<br/>Subregion: Sangihe Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1055">View Detail</a>'],['Salak',-6.72,106.73,1072, 'Gunung: Salak<br/>Longitude: 106.73<br/>Latitude: -6.72<br/>Last Eruption: 1935<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1072">View Detail</a>'],['Sangeang Api',-8.2,119.07,1097, 'Gunung: Sangeang Api<br/>Longitude: 119.07<br/>Latitude: -8.2<br/>Last Eruption: 1999<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1097">View Detail</a>'],['Sano, Wai',-8.72,120.02,1098, 'Gunung: Sano, Wai<br/>Longitude: 120.02<br/>Latitude: -8.72<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1098">View Detail</a>'],['Sarik-Gajah',0.08,100.2,1113, 'Gunung: Sarik-Gajah<br/>Longitude: 100.2<br/>Latitude: 0.08<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1113">View Detail</a>'],['Sekincau Belirang',-5.12,104.32,1126, 'Gunung: Sekincau Belirang<br/>Longitude: 104.32<br/>Latitude: -5.12<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1126">View Detail</a>'],['Semeru',-8.108,112.92,1127, 'Gunung: Semeru<br/>Longitude: 112.92<br/>Latitude: -8.108<br/>Last Eruption: 2011<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1127">View Detail</a>'],['Sempu',1.13,124.758,1129, 'Gunung: Sempu<br/>Longitude: 124.758<br/>Latitude: 1.13<br/>Last Eruption: <br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1129">View Detail</a>'],['Serua',-6.3,130,1132, 'Gunung: Serua<br/>Longitude: 130<br/>Latitude: -6.3<br/>Last Eruption: 1921<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1132">View Detail</a>'],['Seulawah Agam',5.448,95.658,1134, 'Gunung: Seulawah Agam<br/>Longitude: 95.658<br/>Latitude: 5.448<br/>Last Eruption: 1839<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1134">View Detail</a>'],['Sibayak',3.23,98.52,1148, 'Gunung: Sibayak<br/>Longitude: 98.52<br/>Latitude: 3.23<br/>Last Eruption: 1881<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1148">View Detail</a>'],['Sibualbuali',1.556,99.255,1149, 'Gunung: Sibualbuali<br/>Longitude: 99.255<br/>Latitude: 1.556<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1149">View Detail</a>'],['Sinabung',3.17,98.392,1156, 'Gunung: Sinabung<br/>Longitude: 98.392<br/>Latitude: 3.17<br/>Last Eruption: 2010<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1156">View Detail</a>'],['Sirung',-8.508,124.13,1161, 'Gunung: Sirung<br/>Longitude: 124.13<br/>Latitude: -8.508<br/>Last Eruption: 1965<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1161">View Detail</a>'],['Slamet',-7.242,109.208,1162, 'Gunung: Slamet<br/>Longitude: 109.208<br/>Latitude: -7.242<br/>Last Eruption: 2009<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1162">View Detail</a>'],['Soputan',1.108,124.73,1176, 'Gunung: Soputan<br/>Longitude: 124.73<br/>Latitude: 1.108<br/>Last Eruption: 2008<br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1176">View Detail</a>'],['Sorikmarapi',0.686,99.539,1177, 'Gunung: Sorikmarapi<br/>Longitude: 99.539<br/>Latitude: 0.686<br/>Last Eruption: 1996<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1177">View Detail</a>'],['Sukaria Caldera',-8.792,121.77,1208, 'Gunung: Sukaria Caldera<br/>Longitude: 121.77<br/>Latitude: -8.792<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1208">View Detail</a>'],['Sumbing',-2.414,101.728,1211, 'Gunung: Sumbing<br/>Longitude: 101.728<br/>Latitude: -2.414<br/>Last Eruption: 1921<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1211">View Detail</a>'],['Sumbing',-7.384,110.07,1212, 'Gunung: Sumbing<br/>Longitude: 110.07<br/>Latitude: -7.384<br/>Last Eruption: 1730<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1212">View Detail</a>'],['Sundoro',-7.3,109.992,1214, 'Gunung: Sundoro<br/>Longitude: 109.992<br/>Latitude: -7.3<br/>Last Eruption: 1971<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1214">View Detail</a>'],['Suoh',-5.25,104.27,1216, 'Gunung: Suoh<br/>Longitude: 104.27<br/>Latitude: -5.25<br/>Last Eruption: 1933<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1216">View Detail</a>'],['Talagabodas',-7.208,108.07,1239, 'Gunung: Talagabodas<br/>Longitude: 108.07<br/>Latitude: -7.208<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1239">View Detail</a>'],['Talakmau',0.079,99.98,1240, 'Gunung: Talakmau<br/>Longitude: 99.98<br/>Latitude: 0.079<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1240">View Detail</a>'],['Talang',-0.978,100.679,1241, 'Gunung: Talang<br/>Longitude: 100.679<br/>Latitude: -0.978<br/>Last Eruption: 2007<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1241">View Detail</a>'],['Tambora',-8.25,118,1243, 'Gunung: Tambora<br/>Longitude: 118<br/>Latitude: -8.25<br/>Last Eruption: 1880<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1243">View Detail</a>'],['Tampomas',-6.77,107.95,1244, 'Gunung: Tampomas<br/>Longitude: 107.95<br/>Latitude: -6.77<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1244">View Detail</a>'],['Tandikat',-0.433,100.317,1247, 'Gunung: Tandikat<br/>Longitude: 100.317<br/>Latitude: -0.433<br/>Last Eruption: 1924<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1247">View Detail</a>'],['Tangkubanparahu',-6.77,107.6,1249, 'Gunung: Tangkubanparahu<br/>Longitude: 107.6<br/>Latitude: -6.77<br/>Last Eruption: 1985<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1249">View Detail</a>'],['Tara, Batu',-7.792,123.579,1251, 'Gunung: Tara, Batu<br/>Longitude: 123.579<br/>Latitude: -7.792<br/>Last Eruption: 2010<br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1251">View Detail</a>'],['Tarakan',1.83,127.83,1252, 'Gunung: Tarakan<br/>Longitude: 127.83<br/>Latitude: 1.83<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1252">View Detail</a>'],['Telomoyo',-7.37,110.4,1267, 'Gunung: Telomoyo<br/>Longitude: 110.4<br/>Latitude: -7.37<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1267">View Detail</a>'],['Telong, Bur ni',4.769,96.821,1268, 'Gunung: Telong, Bur ni<br/>Longitude: 96.821<br/>Latitude: 4.769<br/>Last Eruption: 1919<br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1268">View Detail</a>'],['Tengger Caldera',-7.942,112.95,1272, 'Gunung: Tengger Caldera<br/>Longitude: 112.95<br/>Latitude: -7.942<br/>Last Eruption: 2011<br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1272">View Detail</a>'],['Teon',-6.92,129.125,1274, 'Gunung: Teon<br/>Longitude: 129.125<br/>Latitude: -6.92<br/>Last Eruption: 1904<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1274">View Detail</a>'],['Tidore',0.658,127.4,1283, 'Gunung: Tidore<br/>Longitude: 127.4<br/>Latitude: 0.658<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1283">View Detail</a>'],['Tigalalu',0.07,127.42,1284, 'Gunung: Tigalalu<br/>Longitude: 127.42<br/>Latitude: 0.07<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1284">View Detail</a>'],['Toba',2.58,98.83,1296, 'Gunung: Toba<br/>Longitude: 98.83<br/>Latitude: 2.58<br/>Last Eruption: <br/>Subregion: Sumatra<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1296">View Detail</a>'],['Tobaru',1.63,127.67,1297, 'Gunung: Tobaru<br/>Longitude: 127.67<br/>Latitude: 1.63<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1297">View Detail</a>'],['Todoko-Ranu',1.25,127.47,1298, 'Gunung: Todoko-Ranu<br/>Longitude: 127.47<br/>Latitude: 1.25<br/>Last Eruption: <br/>Subregion: Halmahera<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1298">View Detail</a>'],['Tondano Caldera',1.23,124.83,1311, 'Gunung: Tondano Caldera<br/>Longitude: 124.83<br/>Latitude: 1.23<br/>Last Eruption: <br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1311">View Detail</a>'],['Tongkoko',1.52,125.2,1314, 'Gunung: Tongkoko<br/>Longitude: 125.2<br/>Latitude: 1.52<br/>Last Eruption: 1846<br/>Subregion: Sulawesi<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1314">View Detail</a>'],['Ungaran',-7.18,110.33,1368, 'Gunung: Ungaran<br/>Longitude: 110.33<br/>Latitude: -7.18<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1368">View Detail</a>'],['Wayang-Windu',-7.208,107.63,1475, 'Gunung: Wayang-Windu<br/>Longitude: 107.63<br/>Latitude: -7.208<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1475">View Detail</a>'],['Wilis',-7.808,111.758,1483, 'Gunung: Wilis<br/>Longitude: 111.758<br/>Latitude: -7.808<br/>Last Eruption: <br/>Subregion: Java<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1483">View Detail</a>'],['Wurlali',-7.125,128.675,1487, 'Gunung: Wurlali<br/>Longitude: 128.675<br/>Latitude: -7.125<br/>Last Eruption: 1892<br/>Subregion: Banda Sea<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1487">View Detail</a>'],['Yersey',-7.53,123.95,1499, 'Gunung: Yersey<br/>Longitude: 123.95<br/>Latitude: -7.53<br/>Last Eruption: <br/>Subregion: Lesser Sunda Islands<br/>Region: Indonesia<br/><a href="/volcanos/volcanos/info/1499">View Detail</a>'] ];
            


            function setMarkers(map, markers) {

                for (var i = 0; i < markers.length; i++) {
                    var sites = markers[i];
                    var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);

                     var contentString = sites[4];

                    var marker = new google.maps.Marker({
                        position: siteLatLng,
                        map: map,
                        icon: '/tubesoot/images/marker.png',
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
                     <p>&nbsp;&nbsp;&nbsp;&nbsp; Informasi Gempa Bumi di Indonesia.</p>
                     <hr/>
                </div>

                <div class="span12">
                <div id="map_canvas" style="height:500px;"></div>
                <hr/>
                </div>

 <div class="span3" style="text-align:right">
 <div class="login-form">
		<div class="login-info">Silahkan login dengan mengisi username dan password</div>
		<form method="post" action="otentikasi.php" name="login" autocomplete="off">
			<input type="text" name="username" placeholder="Ketik Username..." id="username" autofocus><br>
			<input type="password" name="password" placeholder="Ketik Password..." id="password"><br>
			<input type="submit" value="Login" > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a class="btn" href="register.php">Register</a>
		</form>
 </div>
</div>				
              
				<div class="span4" style="text-align:left">
<?php
	
 $auth = base64_encode('1103110102:proxy_password');
 $aContext = array(
'http' => array(
'proxy' => 'tcp://127.0.0.1:8080',
'request_fulluri' => true,
'header' => "Proxy-Authorization: Basic $auth",
 ),
);
 $cxContext = stream_context_create($aContext);

 $sFile = file_get_contents($url, False, $cxContext);

 $url = "http://www.bmkg.go.id/webXML/en_autogempa.xml";
 $sUrl = file_get_contents($url, False);
 $xml = simplexml_load_string($sUrl);

?>
 <table border="1" cellpadding="4" cellspacing="0" style="border-collapse:collapse;" width="500">
 <tr>
 <th colspan="3" style="text-align:center" >Data Gempa Terakhir</th>
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

</table>

                </div>
				

                <div class="span12" style="text-align:right">
                   <a class="btn btn-info" href="/tubesoot/asset/submit_info.htm">Kirim Informasi disini</a>
                     <hr/>
                </div>

                
                <div class="span12">
                    <img src="/tubesoot/images/foto.jpg"> 
                     <hr/>
                </div>
        </div>
</div>

</body>
</html>