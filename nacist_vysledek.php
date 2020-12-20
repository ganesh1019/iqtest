<?php
ob_start();
$kodtestu=$_GET['ssid'];
$bsms=$_GET['bsms'];


require_once "db.php";	
$query2 = MySQL_Query("SELECT * FROM `vysledky` WHERE KOD = '$kodtestu' && BSMS = '$bsms'");

$Vysledek2 = mysql_fetch_array($query2);
$IQ= $Vysledek2['IQ'];

if ($IQ){
	$bl="index.php?page=vyhodnoceni_vysledek&ssid=".$kodtestu."&bsms=".$bsms."";
	}
else
$bl="index.php?page=vysledek&Alert=43";



header("location: $bl");
?>