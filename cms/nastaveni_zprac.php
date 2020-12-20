<?php 
require_once "../db.php";

$chyba='0';

//paypal
//Allow PayPal
if (empty($_POST['allowp'])){
	$allowp=0;
}else{
	$allowp=1;
}
$email=$_POST['email'];
$text=$_POST['text'];
$cena=$_POST['cena'];
$mena=$_POST['mena'];
$textreturn=$_POST['textreturn'];

//hlavička
$title=$_POST['title'];
$description=$_POST['description'];
$keywords=$_POST['keywords'];
$lang=$_POST['lang'];

//admin
$admin=$_POST['admin'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$password3=$_POST['password3'];

$query = MySQL_Query("SELECT * FROM `iqadmin` WHERE `ID` = '1'") or die (mysql_error());
$Vysledek = mysql_fetch_array($query);
$passworddb=$Vysledek['heslo']; 

//web
$domena=$_POST['domena'];
if(substr($domena,-1) != "/")
{
	$domena = $_POST['domena'] . "/";
}
$kontakt=$_POST['kontakt'];
$webtitle=$_POST['webtitle'];
$headercode= $_POST['headercode'];
$footercode= $_POST['footercode'];
$footerlink= $_POST['footerlink'];

//fb
if (empty($_POST['fb'])){
	$fb=0;
}else{
	$fb=1;
}
$fbstranka=$_POST['fbstranka'];
$fbjazyk=$_POST['fbjazyk'];



$ID=1;

//paypal
$VlozData=mysql_query("update paypal set email = '$email' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update paypal set text = '$text' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update paypal set cena = '$cena' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update paypal set mena = '$mena' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update paypal set textreturn = '$textreturn' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update paypal set allowp = '$allowp'") or die (mysql_error());


//hlavička
$VlozData=mysql_query("update hlavicka set title = '$title' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update hlavicka set description = '$description' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update hlavicka set keywords = '$keywords' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update hlavicka set lang = '$lang' where ID = '$ID'") or die (mysql_error());

//admin
$VlozData=mysql_query("update iqadmin set jmeno = '$admin' where ID = '$ID'") or die (mysql_error());

		
		if (empty($_POST['password2']) && empty($_POST['password3'])){
		}else{
		 		if($password2 != $password3 ){
				$backlink="admin.php?page=nastaveni&Alert=1";
				$chyba=1;
				}
			else {
				$password1md5=md5($password1);
				if ($passworddb!=$password1md5){
					$backlink="admin.php?page=nastaveni&Alert=0";
					$chyba=2;
					}else{
					$password2md5=md5($password2);
					$VlozData=mysql_query("update iqadmin set heslo = '$password2md5' where ID = '$ID'") or die (mysql_error());	
					}
				}
			}

//web
$VlozData=mysql_query("update web set domena = '$domena' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update web set kontakt = '$kontakt' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update web set webtitle = '$webtitle' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update web set headercode = '$headercode' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update web set footercode = '$footercode' where ID = '$ID'") or die (mysql_error());
$VlozData=mysql_query("update web set footerlink = '$footerlink' where ID = '$ID'") or die (mysql_error());

//fb
$VlozData=mysql_query("update fb set zobrazeni = '$fb'") or die (mysql_error());
$VlozData=mysql_query("update fb set stranka = '$fbstranka'") or die (mysql_error());
$VlozData=mysql_query("update fb set jazyk = '$fbjazyk'") or die (mysql_error());



//výstup
if ($chyba=='0'){
$backlink="admin.php?page=nastaveni&Alert=2"; // presmerovani s hlaskou ze nebyl rozpoznán typ
header ("Location: $backlink"); //změna hlavicky ( přesmerování )
ob_end_flush();
}

?>