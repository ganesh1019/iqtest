<?php
ob_start();
$jmeno=$_GET['jmeno'];
$email=$_GET['email'];
$telefon=$_GET['telefon'];
$zprava=$_GET['zprava'];


include "language/language.php";
require_once "db.php";
$query = MySQL_Query("SELECT * FROM `web` WHERE ID = '1'") or die (mysql_error());
$Vysledek = mysql_fetch_array($query);  
$kontakt= $Vysledek['kontakt'];


$to=$kontakt;
//echo $to;

$subject= ""._SUBJECT."";
$message= ""._NAME." ".$jmeno."\n"._EMAIL." ".$email."\n"._PHONENUMBER2." ".$telefon."\n\n"._MESSAGE.": \n".$zprava; 



//mail($to, $subject , $message, $headers);

function mail_utf8($to, $subject, $message) {
  $email=$_GET['email'];
  $header = "From: ".$email."" . "\r\n" . "MIME-Version: 1.0" . "\r\n" . "Content-type: text/plain; charset=UTF-8" . "\r\n";
  return (mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header));
}

mail_utf8($kontakt,$subject,$message);



$bl="index.php?page=uvod&Alert=3";

header("location: $bl");
?>