<?php
ob_start();
session_start();



$vek=$_POST['vek'];
$kod=$_POST['kod'];
$idtestu=$_SESSION['TEST'];



require_once "db.php";	
	$query = MySQL_Query("SELECT * FROM `vysledky` WHERE KOD = '$idtestu'") or die (mysql_error());
	$Vysledek = mysql_fetch_array($query);

	$BSMS= $Vysledek['BSMS'];

if ($BSMS==$kod){


//vek
$update= mysql_query("UPDATE vysledky SET vek = '$vek' WHERE KOD = '$idtestu'");

switch ($vek)
{
  case 1: 
$update= mysql_query("UPDATE vysledky SET IQ = IQ+8  WHERE KOD = '$idtestu'");
    break;
  case 2:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+8  WHERE KOD = '$idtestu'");
    break;
  case 3:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+8  WHERE KOD = '$idtestu'");
    break;
  case 4:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+8  WHERE KOD = '$idtestu'");
    break;
  case 5:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+5  WHERE KOD = '$idtestu'");
    break;
	  case 6:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+2  WHERE KOD = '$idtestu'");
    break;
	  case 7:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+2  WHERE KOD = '$idtestu'");
    break;
	  case 8:
$update= mysql_query("UPDATE vysledky SET IQ = IQ  WHERE KOD = '$idtestu'");
    break;
	  case 9:
$update= mysql_query("UPDATE vysledky SET IQ = IQ  WHERE KOD = '$idtestu'");
    break;
	  case 10:
$update= mysql_query("UPDATE vysledky SET IQ = IQ  WHERE KOD = '$idtestu'");
    break;
	  case 11:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+2  WHERE KOD = '$idtestu'");
    break;
	  case 12:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+5  WHERE KOD = '$idtestu'");
    break;
  case 13:
$update= mysql_query("UPDATE vysledky SET IQ = IQ+8  WHERE KOD = '$idtestu'");
    break;
}
//zničení session
//session_destroy(); 

$bl="index.php?page=vyhodnoceni_vysledek&kodtestu=".$idtestu."&bsms=".$kod."";

}
else
{
//pokud se bezpečnostní kod neschoduje

$bl="index.php?page=vyhodnoceni&Alert=42";
	
	}














header("location: $bl");

?>