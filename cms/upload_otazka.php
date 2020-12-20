<?php
ob_start();
/*
* Tetno soubor zjisti zda se takovy uzivatel s takovym heslem v databazi nachazi. 
* Pokud ano, do sessions o tom ulozime informaci.
* Jinak se samozrejme presmerujeme zpet a dame uzivateli vedet, ze zadal spatne udaje
*/
session_start(); // Budeme pracovat se session, musíme je nastartovat.

require "../db.php";


$autor=$_SESSION['login'];


$otazka = $_POST["cislo"];
$odpoved = $_POST["odpoved"];


$time=Time();
$soubor_name = $time.".jpg";
$soubor = ($_FILES["soubor"]["tmp_name"]);
$ok = ($_POST["ok"]);

if ($soubor_name!="")
{
    if (move_uploaded_file($soubor, "../upload/$soubor_name"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
    

	  $VlozData=mysql_query(" INSERT INTO otazky (`typ`, `pridano`,`autor`,`otazka`,`vzor`,`odpoved`) VALUES ('$typ','$time','$autor','$time','$otazka','$odpoved')  ") or die (mysql_error());
	
	$query = MySQL_Query("SELECT * FROM `otazky` ORDER BY id desc") or die (mysql_error());
	$Vysledek = mysql_fetch_array($query);
	$id=$Vysledek['id'];
	
	
	//OTAZKA 1 A
	
	$time++;
	$soubor_name1 = $time.".jpg";
	$soubor1 = ($_FILES["soubor1"]["tmp_name"]);
	
	if ($soubor_name1!="")
{
	  if (move_uploaded_file($soubor1, "../upload/$soubor_name1"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved1A = '$time' WHERE id='$id'");
		}}
		
		//OTAZKA 1 B
	
	$time++;
	$soubor_name2 = $time.".jpg";
	$soubor2 = ($_FILES["soubor2"]["tmp_name"]);
	
	if ($soubor_name2!="")
{
	  if (move_uploaded_file($soubor2, "../upload/$soubor_name2"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved1B = '$time' WHERE id='$id'");
		}}
		
		
		
		
	//OTAZKA 2 A
	
	$time++;
	$soubor_name3 = $time.".jpg";
	$soubor3 = ($_FILES["soubor3"]["tmp_name"]);
	
	if ($soubor_name3!="")
{
	  if (move_uploaded_file($soubor3, "../upload/$soubor_name3"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved2A = '$time' WHERE id='$id'");
		}}
		
		//OTAZKA 2 B
	
	$time++;
	$soubor_name4 = $time.".jpg";
	$soubor4 = ($_FILES["soubor4"]["tmp_name"]);
	
	if ($soubor_name4!="")
{
	  if (move_uploaded_file($soubor4, "../upload/$soubor_name4"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved2B = '$time' WHERE id='$id'");
		}}
		
		
		
		
	//OTAZKA 3 A
	
	$time++;
	$soubor_name5 = $time.".jpg";
	$soubor5 = ($_FILES["soubor5"]["tmp_name"]);
	
	if ($soubor_name5!="")
{
	  if (move_uploaded_file($soubor5, "../upload/$soubor_name5"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved3A = '$time' WHERE id='$id'");
		}}
		
		//OTAZKA 3 B
	
	$time++;
	$soubor_name6 = $time.".jpg";
	$soubor6 = ($_FILES["soubor6"]["tmp_name"]);
	
	if ($soubor_name6!="")
{
	  if (move_uploaded_file($soubor6, "../upload/$soubor_name6"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved3B = '$time' WHERE id='$id'");
		}}	
	
			
		
		
		
	//OTAZKA 4 A
	
	$time++;
	$soubor_name7 = $time.".jpg";
	$soubor7 = ($_FILES["soubor7"]["tmp_name"]);
	
	if ($soubor_name7!="")
{
	  if (move_uploaded_file($soubor7, "../upload/$soubor_name7"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved4A = '$time' WHERE id='$id'");
		}}
		
		//OTAZKA 4 B
	
	$time++;
	$soubor_name8 = $time.".jpg";
	$soubor8 = ($_FILES["soubor8"]["tmp_name"]);
	
	if ($soubor_name8!="")
{
	  if (move_uploaded_file($soubor8, "../upload/$soubor_name8"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved4B = '$time' WHERE id='$id'");
		}}
				
		
		
		
	//OTAZKA 5 A
	
	$time++;
	$soubor_name9 = $time.".jpg";
	$soubor9 = ($_FILES["soubor9"]["tmp_name"]);
	
	if ($soubor_name9!="")
{
	  if (move_uploaded_file($soubor9, "../upload/$soubor_name9"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved5A = '$time' WHERE id='$id'");
		}}
		
		//OTAZKA 5 B
	
	$time++;
	$soubor_name10 = $time.".jpg";
	$soubor10 = ($_FILES["soubor10"]["tmp_name"]);
	
	if ($soubor_name10!="")
{
	  if (move_uploaded_file($soubor10, "../upload/$soubor_name10"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved5B = '$time' WHERE id='$id'");
		}}
		
				
		
		
		
	//OTAZKA 6 A
	
	$time++;
	$soubor_name11 = $time.".jpg";
	$soubor11 = ($_FILES["soubor11"]["tmp_name"]);
	
	if ($soubor_name11!="")
{
	  if (move_uploaded_file($soubor11, "../upload/$soubor_name11"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved6A = '$time' WHERE id='$id'");
		}}
		
		//OTAZKA 6 B
	
	$time++;
	$soubor_name12 = $time.".jpg";
	$soubor12 = ($_FILES["soubor12"]["tmp_name"]);
	
	if ($soubor_name12!="")
{
	  if (move_uploaded_file($soubor12, "../upload/$soubor_name12"))
        {
     //   chmod ("./$soubor_name", 0646);
        echo "<b>Soubor $soubor_name byl nahran na server</b><BR>";
		$update= mysql_query("UPDATE otazky SET odpoved6B = '$time' WHERE id='$id'");
		}}
		
		
		
		
	$backlink="admin.php?page=testy";
	header ("Location: $backlink");
	ob_end_flush();
	    }
    else
        {
        echo "<b>Chyba - náhled do galerie musí být vybrán !</b><BR>";
        }
}
?>