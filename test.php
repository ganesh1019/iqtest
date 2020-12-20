<?php
ob_start();
$cislo = $_GET['otazka'];



	require_once "db.php";	
	$query = MySQL_Query("SELECT * FROM `otazky` WHERE vzor = $cislo") or die (mysql_error());
	$Vysledek = mysql_fetch_array($query);
	
	$otazka= $Vysledek['otazka'];
	
	$odpoved1a= $Vysledek['odpoved1A'];
	$odpoved1b= $Vysledek['odpoved1B'];
	
	$odpoved2a= $Vysledek['odpoved2A'];
	$odpoved2b= $Vysledek['odpoved2B'];
	
	$odpoved3a= $Vysledek['odpoved3A'];
	$odpoved3b= $Vysledek['odpoved3B'];
	
	$odpoved4a= $Vysledek['odpoved4A'];
	$odpoved4b= $Vysledek['odpoved4B'];
	
	$odpoved5a= $Vysledek['odpoved5A'];
	$odpoved5b= $Vysledek['odpoved5B'];
	
	$odpoved6a= $Vysledek['odpoved6A'];
	$odpoved6b= $Vysledek['odpoved6B'];
	
	$odpoved= $Vysledek['odpoved'];
	
	
	
	
?>
<SCRIPT LANGUAGE="JavaScript">
function zmena1()
{
logo1.src="upload/<?php echo $odpoved1a ;?>.jpg"
}
function puvodni1()
{
logo1.src="upload/<?php echo $odpoved1b ;?>.jpg"
}



function zmena2()
{
logo2.src="upload/<?php echo $odpoved2a ;?>.jpg"
}
function puvodni2()
{
logo2.src="upload/<?php echo $odpoved2b ;?>.jpg"
}



function zmena3()
{
logo3.src="upload/<?php echo $odpoved3a ;?>.jpg"
}
function puvodni3()
{
logo3.src="upload/<?php echo $odpoved3b ;?>.jpg"
}



function zmena4()
{
logo4.src="upload/<?php echo $odpoved4a ;?>.jpg"
}
function puvodni4()
{
logo4.src="upload/<?php echo $odpoved4b ;?>.jpg"
}




function zmena5()
{
logo5.src="upload/<?php echo $odpoved5a ;?>.jpg"
}
function puvodni5()
{
logo5.src="upload/<?php echo $odpoved5b ;?>.jpg"
}




function zmena6()
{
logo6.src="upload/<?php echo $odpoved6a ;?>.jpg"
}
function puvodni6()
{
logo6.src="upload/<?php echo $odpoved6b ;?>.jpg"
}
</SCRIPT>
<div class="testfield">
   <div class="testfield-1"><?php print(_TESTINFOLINE); ?></div>
   <div class="testfield-2"><?php print(_TESTQUESTION); ?> <?php echo $cislo; ?>/30</div>
   
   </div> <!--TestField End-->
   <div class="clear"></div>
   
   <div class="testbar">
   <div class="testimage"><img src="upload/<?php echo $otazka ;?>.jpg" width="630 " height="394"></div>
   <div class="imagestab">
   
   <table border="0" cellpadding="1" cellspacing="0">
<tr>
<td>
 <a href="prubeh.php?o=<?php echo $cislo ?>&od=1">
<IMG SRC="upload/<?php echo $odpoved1b ;?>.jpg" NAME="logo1" ONMOUSEOVER="zmena1()" ONMOUSEOUT="puvodni1()" >
</a>
</td>
<td>
 <a href="prubeh.php?o=<?php echo $cislo ?>&od=2">
<IMG SRC="upload/<?php echo $odpoved2b ;?>.jpg" NAME="logo2" ONMOUSEOVER="zmena2()" ONMOUSEOUT="puvodni2()">
</td>
</tr>

<tr>
<td>
 <a href="prubeh.php?o=<?php echo $cislo ?>&od=3">
<IMG SRC="upload/<?php echo $odpoved3b ;?>.jpg" NAME="logo3" ONMOUSEOVER="zmena3()" ONMOUSEOUT="puvodni3()">
</a>
</td>
<td>
 <a href="prubeh.php?o=<?php echo $cislo ?>&od=4">
<IMG SRC="upload/<?php echo $odpoved4b ;?>.jpg" NAME="logo4" ONMOUSEOVER="zmena4()" ONMOUSEOUT="puvodni4()">
</td>
</tr>

<tr>
<td>
 <a href="prubeh.php?o=<?php echo $cislo ?>&od=5">
<IMG SRC="upload/<?php echo $odpoved5b ;?>.jpg" NAME="logo5" ONMOUSEOVER="zmena5()" ONMOUSEOUT="puvodni5()">
</td>
<td>
 <a href="prubeh.php?o=<?php echo $cislo ?>&od=6">
<IMG SRC="upload/<?php echo $odpoved6b ;?>.jpg" NAME="logo6" ONMOUSEOVER="zmena6()" ONMOUSEOUT="puvodni6()">
</td>
</tr>




</table>
   
   
   </div>
   <div class="clear"></div>
   


   </div> <!--TestBar End-->
   
   
   <div class="undertestbar">
   <span class="leva"><?php print(_TESTID); ?> <strong><?php echo $_SESSION['TEST']?></strong></span>
   <span class="prava"><a href="prubeh.php?o=<?php echo $cislo ?>&od=0"><?php print(_JUMPTHEQUESTION); ?></a></span>
   <div class="clear"></div>
   </div>
   


