<form method="post">
<label>No HP Format +62xxxxxxx </label>
<input type="text" name="nohp">
<label>Pesan</label>
<input type="text" name="pesan">
<input type="submit" name="button" value="Kirim">
</form>
<?php
if(isset($_POST['button']))
{
    mysql_connect("localhost","root","");
    mysql_select_db("smsdb"); 
    $query=mysql_query("INSERT INTO outbox (DestinationNumber,
    TextDecoded) VALUES ('".$_POST['nohp']."', '".$_POST['pesan']."')");
    if($query)
    {
        echo "<script>alert('Sukses kirim sms')</script>";
    }
}
?>