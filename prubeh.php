<?php
ob_start();
session_start();

$otazka= $_GET['o'];
$odpoved=$_GET['od'];

$ID=$_SESSION['ID'];

$otazkadb="odpoved".$otazka;

$TIME=time();

require "db.php"; 
	$update= mysql_query("UPDATE vysledky SET $otazkadb = '$odpoved' WHERE ID='$ID'") or die (mysql_error());

	
	
$dalsio=$otazka+1;

if ($dalsio<=30){		
header ("Location: index.php?page=test&otazka=".$dalsio."");
}
else
header ("Location: index.php?page=vyhodnoceni");

ob_end_flush();
?>