<?php
 $url = "http://data.bmkg.go.id/autogempa.xml";
 $sUrl = file_get_contents($url, False);
 $xml = simplexml_load_string($sUrl);

?>
 <table border="1" cellpadding="4" cellspacing="0" style="border-collapse:collapse;" width="500">
 <tr>
 <th colspan="3">Data Gempa Terakhir</th>
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
