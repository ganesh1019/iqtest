
<?php 
session_start();
$idtest=$_SESSION['TEST'];

if ( $_SESSION['TEST']){

require_once "db.php";

//paypal
$query = MySQL_Query("SELECT * FROM `web` WHERE ID = '1'") or die (mysql_error());
$Vysledek = mysql_fetch_array($query);  
$domena= $Vysledek['domena'];



$query = MySQL_Query("SELECT * FROM `vysledky` WHERE KOD = '$idtest'") or die (mysql_error());
$Vysledek = mysql_fetch_array($query);
	
$idtestu= $Vysledek['ID'];


$odpoved1= $Vysledek['odpoved1'];
$odpoved2= $Vysledek['odpoved2'];
$odpoved3= $Vysledek['odpoved3'];
$odpoved4= $Vysledek['odpoved4'];
$odpoved5= $Vysledek['odpoved5'];

$odpoved6= $Vysledek['odpoved6'];
$odpoved7= $Vysledek['odpoved7'];
$odpoved8= $Vysledek['odpoved8'];
$odpoved9= $Vysledek['odpoved9'];
$odpoved10= $Vysledek['odpoved10'];

$odpoved11= $Vysledek['odpoved11'];
$odpoved12= $Vysledek['odpoved12'];
$odpoved13= $Vysledek['odpoved13'];
$odpoved14= $Vysledek['odpoved14'];
$odpoved15= $Vysledek['odpoved15'];

$odpoved16= $Vysledek['odpoved16'];
$odpoved17= $Vysledek['odpoved17'];
$odpoved18= $Vysledek['odpoved18'];
$odpoved19= $Vysledek['odpoved19'];
$odpoved20= $Vysledek['odpoved20'];

$odpoved21= $Vysledek['odpoved21'];
$odpoved22= $Vysledek['odpoved22'];
$odpoved23= $Vysledek['odpoved23'];
$odpoved24= $Vysledek['odpoved24'];
$odpoved25= $Vysledek['odpoved25'];

$odpoved26= $Vysledek['odpoved26'];
$odpoved27= $Vysledek['odpoved27'];
$odpoved28= $Vysledek['odpoved28'];
$odpoved29= $Vysledek['odpoved29'];
$odpoved30= $Vysledek['odpoved30'];

//startovaci IQ
$IQ=72;   // 68 - standart



//správné odpovědi
for($c=1; $c<31; $c++){
$query2 = MySQL_Query("SELECT * FROM `otazky` WHERE vzor = '$c'");
$Vysledek2 = mysql_fetch_array($query2);
	

$spravna= $Vysledek2['odpoved'];
$spoj="odpoved".$c;

if ($spravna==$Vysledek[$spoj]){
	$IQ=$IQ+2;
	}

}

$timeend=Time();

$update= mysql_query("UPDATE vysledky SET TIMEEND = '$timeend' WHERE KOD = '$idtest'") or die (mysql_error());
$update= mysql_query("UPDATE vysledky SET IQ = '$IQ' WHERE KOD = '$idtest'") or die (mysql_error());

$odpoved1= $Vysledek['odpoved1'];
$odpoved2= $Vysledek['odpoved2'];
$odpoved3= $Vysledek['odpoved3'];
$odpoved4= $Vysledek['odpoved4'];
$odpoved5= $Vysledek['odpoved5'];

$odpoved6= $Vysledek['odpoved6'];
$odpoved7= $Vysledek['odpoved7'];
$odpoved8= $Vysledek['odpoved8'];
$odpoved9= $Vysledek['odpoved9'];
$odpoved10= $Vysledek['odpoved10'];

$odpoved11= $Vysledek['odpoved11'];
$odpoved12= $Vysledek['odpoved12'];
$odpoved13= $Vysledek['odpoved13'];
$odpoved14= $Vysledek['odpoved14'];
$odpoved15= $Vysledek['odpoved15'];

$odpoved16= $Vysledek['odpoved16'];
$odpoved17= $Vysledek['odpoved17'];
$odpoved18= $Vysledek['odpoved18'];
$odpoved19= $Vysledek['odpoved19'];
$odpoved20= $Vysledek['odpoved20'];

$odpoved21= $Vysledek['odpoved21'];
$odpoved22= $Vysledek['odpoved22'];
$odpoved23= $Vysledek['odpoved23'];
$odpoved24= $Vysledek['odpoved24'];
$odpoved25= $Vysledek['odpoved25'];

$odpoved26= $Vysledek['odpoved26'];
$odpoved27= $Vysledek['odpoved27'];
$odpoved28= $Vysledek['odpoved28'];
$odpoved29= $Vysledek['odpoved29'];
$odpoved30= $Vysledek['odpoved30'];

}
else
{

$bl="index.php?page=chyba";
header("location: $bl");

	}

?>
<?php 
    $query3 = MySQL_Query("SELECT * FROM `paypal`") or die (mysql_error());
    $Vysledek3 = mysql_fetch_array($query3);
    
    $allowp= $Vysledek3['allowp'];
	
	if ($allowp==0){
	?>
    <script> window.location="<?php echo $domena; ?>index.php?page=vyhodnoceni_vysledek&ssid=<?php echo $_SESSION['TEST']?>"; </script>
    <?php
    }
	
?>	
	
<div class="contentbox">

<div class="bluebox">
<h3><?php print(_CONGRATULATION2); ?></h3>

<?php
$query2 = MySQL_Query("SELECT * FROM `paypal` WHERE ID = '1'");
$Vysledek2 = mysql_fetch_array($query2);
$paymail= $Vysledek2['email'];
$paytext= $Vysledek2['text'];
$paycena= $Vysledek2['cena'];
$paymena= $Vysledek2['mena'];
$textreturn= $Vysledek2['textreturn'];
?>

<span class="testform"><?php print(_PAYONLY); ?> <strong><span><?php echo $paycena; ?> <?php echo $paymena; ?></span></strong> <?php print(_TODISPLAYRESULT); ?> </span>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<input name="business" type="hidden" value="<?php echo $paymail; ?>" />

<input name="cmd" type="hidden" value="_xclick" />

<input type="hidden" name="cbt" value="<?php echo $textreturn; ?>" />

<input name="item_name" type="hidden" value="<?php echo $paytext." - Test ID: ".$_SESSION['TEST'] ?>" />

<input name="amount" type="hidden" value="<?php echo $paycena; ?>" />

<input name="currency_code" type="hidden" value="<?php echo $paymena; ?>" />

<input type="hidden" name="notify_url" value="<?php echo $domena; ?>notify.php?ID=<?php echo $idtest; ?>" />

<input type="hidden" name="return" value="<?php echo $domena; ?>index.php?page=vyhodnoceni_vysledek&ssid=<?php echo $_SESSION['TEST']?>" /> 
<input type="hidden" name="cancel_return" value="<?php echo $domena; ?>index.php?page=vyhodnoceni&ssid=<?php echo $_SESSION['TEST']?>" /> 
 
<input type="hidden" name="kod" value="<?php echo $_SESSION['TEST']?>" />

    
   <div class="paypalbutton"> 
   <input type="image" src="images/paypalbutton.png" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" class="paypalbuttons">
   </div>

</form>
<!-- PayPal Logo -->
<div style="text-align:center;">
<a href="#" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700');"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"></a>
</div>
<!-- PayPal Logo -->
<span class="testid"><?php print(_TESTID); ?> <?php echo $_SESSION['TEST']?></span>

</div> <!--BlueBox End-->
</div> <!--Content Box End-->

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


