<?php
ob_start();
session_start();

function Random_Password($delka_hesla) {
  $mozne_znaky = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
  $vystup = '';
  $pocet_moznych_znaku = strlen($mozne_znaky);
  for ($i=0;$i<$delka_hesla;$i++) {
    $vystup .= $mozne_znaky[mt_rand(0,$pocet_moznych_znaku - 1)];
  };
  return $vystup;
 };
 	
$_SESSION['TEST']=Random_Password(10); 	

$KOD=$_SESSION['TEST'];
$TIME=time();
$TIMEEND="0";
$BSMS=rand(1570, 8497);
require "db.php"; 
$VlozData=mysql_query("INSERT INTO vysledky (KOD,TIME,TIMEEND,BSMS) VALUES ('$KOD', '$TIME','$TIMEEND','$BSMS')") or die (mysql_error());
$query = MySQL_Query("SELECT * FROM `vysledky` ORDER BY ID desc") or die (mysql_error());
$Vysledek = mysql_fetch_array($query);

$ID=$Vysledek['ID'];
$_SESSION['ID']=$ID;


header ("Location: index.php?page=test&otazka=1");

ob_end_flush();	
		
?>