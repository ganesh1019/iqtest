<?php 
//$KOD=$_POST['ssid'];
$KOD=$_GET['ssid'];


require_once "db.php";	

	$query2 = MySQL_Query("SELECT * FROM `vysledky` WHERE KOD = '$KOD'") or die (mysql_error());
	$Vysledek2 = mysql_fetch_array($query2);
	
	$IQ= $Vysledek2['IQ'];
	$BSMS= $Vysledek2['BSMS'];
		$otazka= $Vysledek2['otazka'];
	
	$odpoved1= $Vysledek2['odpoved1'];
	$odpoved2= $Vysledek2['odpoved2'];
	$odpoved3= $Vysledek2['odpoved3'];
	$odpoved4= $Vysledek2['odpoved4'];
	$odpoved5= $Vysledek2['odpoved5'];
	
	$odpoved6= $Vysledek2['odpoved6'];
	$odpoved7= $Vysledek2['odpoved7'];
	$odpoved8= $Vysledek2['odpoved8'];
	$odpoved9= $Vysledek2['odpoved9'];
	$odpoved10= $Vysledek2['odpoved10'];
	
	$odpoved11= $Vysledek2['odpoved11'];
	$odpoved12= $Vysledek2['odpoved12'];
	$odpoved13= $Vysledek2['odpoved13'];
	$odpoved14= $Vysledek2['odpoved14'];
	$odpoved15= $Vysledek2['odpoved15'];
	
	$odpoved16= $Vysledek2['odpoved16'];
	$odpoved17= $Vysledek2['odpoved17'];
	$odpoved18= $Vysledek2['odpoved18'];
	$odpoved19= $Vysledek2['odpoved19'];
	$odpoved20= $Vysledek2['odpoved20'];
	
	$odpoved21= $Vysledek2['odpoved21'];
	$odpoved22= $Vysledek2['odpoved22'];
	$odpoved23= $Vysledek2['odpoved23'];
	$odpoved24= $Vysledek2['odpoved24'];
	$odpoved25= $Vysledek2['odpoved25'];
	
	$odpoved26= $Vysledek2['odpoved26'];
	$odpoved27= $Vysledek2['odpoved27'];
	$odpoved28= $Vysledek2['odpoved28'];
	$odpoved29= $Vysledek2['odpoved29'];
	$odpoved30= $Vysledek2['odpoved30'];

?>
<div class="contentbox">
     <div class="bluebox">
    <h3><?php print(_CONGRATULATION); ?>  <?php echo $IQ?> <?php if ($IQ=="132"){
	echo ''._ORHIGHER.'';  //pokud je dosaženo maxima
}
?></h3>
    <div class="iqbig">IQ <?php echo $IQ?></div>
    
    <span class="testform"><?php print(_TESTID); ?> <?php echo $KOD ?></span>
    <span class="testform"><?php print(_SECURITYCODE); ?> <?php echo $BSMS ?></span>
    <span class="testform"><?php print(_KEEPID); ?></span>
    
    </div>
    <?php if ($IQ=="132"){
	echo '<span class="testform">'._YOUREACH.'</span>';  //pokud je dosaženo maxima
}
else 
{
	echo '<span class="testform">'._CORRECTANSWERS.'</span>';
}
?>
    
    <?php

for($c=1; $c<31; $c++){

	$query = MySQL_Query("SELECT * FROM `otazky` WHERE vzor = $c") or die (mysql_error());
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

$spoj="odpoved".$c;

if($Vysledek2[$spoj]==$odpoved){
	
	}
else
{

//tabulka

echo '<div class="clear"></div><h3 class="answers">'._TESTQUESTION.' '.$c.'</h3>';

echo '<div class="clear"></div><div class="resultsimage">
  <img src="upload/';
  echo $otazka;
  echo '.jpg" width="310" alt="Picture"></td>
</div>
<div class="resultsimages">
<table border="0" cellpadding="1" cellspacing="0">
<tr>
<td>
 <a href="prubeh.php?o=';
 echo $cislo;
 echo '&od=1">
<IMG SRC="upload/';
if($odpoved==1)
{echo $odpoved1b ;}
else
{
	echo $odpoved1a;
	};
echo '.jpg" NAME="logo1" width="85" height="65" alt="Picture">
</a>
</td>
<td>
 <a href="prubeh.php?o=';
 echo $cislo;
 echo '&od=2">
<IMG SRC="upload/';
if($odpoved==2)
{echo $odpoved2b ;}
else
{
	echo $odpoved2a;
	};
echo '.jpg" NAME="logo2" width="85" height="65" alt="Picture">
</td>
</tr>

<tr>
<td>
 <a href="prubeh.php?o=';
 echo $cislo;
 echo '&od=3">
<IMG SRC="upload/';
if($odpoved==3)
{echo $odpoved3b ;}
else
{
	echo $odpoved3a;
	};
echo '.jpg" NAME="logo3" width="85" height="65" alt="Picture">
</a>
</td>
<td>
 <a href="prubeh.php?o=';
 echo $cislo;
 echo '&od=4">
<IMG SRC="upload/';
if($odpoved==4)
{echo $odpoved4b ;}
else
{
	echo $odpoved4a;
	};
echo '.jpg" NAME="logo4" width="85" height="65" alt="Picture">
</td>
</tr>

<tr>
<td>
 <a href="prubeh.php?o=';
 echo $cislo;
 echo '&od=5">
<IMG SRC="upload/';
if($odpoved==5)
{echo $odpoved5b ;}
else
{
	echo $odpoved5a;
	};
echo '.jpg" NAME="logo5" width="85" height="65" alt="Picture">
</td>
<td>
 <a href="prubeh.php?o=';
 echo $cislo;
 echo '&od=6">
<IMG SRC="upload/';
if($odpoved==6)
{echo $odpoved6b ;}
else
{
	echo $odpoved6a;
	};
echo '.jpg" NAME="logo6" width="85" height="65" alt="Picture">
</td>
</tr>
</table>
</div><div class="clear"></div>';



}
};

?>



</div>

<div style="margin-top:10px;"></div>
<div class="facebookbox">
    <?php

    $query2 = MySQL_Query("SELECT * FROM `fb`") or die (mysql_error());
    $Vysledek2 = mysql_fetch_array($query2);
    
    $zobrazeni= $Vysledek2['zobrazeni'];
    $stranka= $Vysledek2['stranka'];
    $jazyk= $Vysledek2['jazyk'];

    if ($zobrazeni==1){

    echo '
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/'.$jazyk.'/all.js#xfbml=1&appId=129211350610565";
    fjs.parentNode.insertBefore(js, fjs);
     }(document, \'script\', \'facebook-jssdk\'));</script>

    <div class="fb-like-box" data-href="'.$stranka.'" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false" data-width="330" data-height="400"></div>
    ';

}
?>

   

   <div class="clear"></div>
   </div>