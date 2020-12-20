<?php
require_once "../db.php";	

	$query2 = MySQL_Query("SELECT * FROM `paypal` WHERE ID = '1'") or die (mysql_error());
	$Vysledek2 = mysql_fetch_array($query2);
	
	$allowp= $Vysledek2['allowp'];
	$email= $Vysledek2['email'];
	$text= $Vysledek2['text'];
	$cena= $Vysledek2['cena'];
	$mena= $Vysledek2['mena'];
	$textreturn= $Vysledek2['textreturn'];


	$query2 = MySQL_Query("SELECT * FROM `hlavicka`") or die (mysql_error());
	$Vysledek2 = mysql_fetch_array($query2);
	
	$title= $Vysledek2['title'];
	$description= $Vysledek2['description'];
	$keywords= $Vysledek2['keywords'];
	$lang= $Vysledek2['lang'];


	$query2 = MySQL_Query("SELECT * FROM `iqadmin`") or die (mysql_error());
	$Vysledek2 = mysql_fetch_array($query2);
	
	$jmeno= $Vysledek2['jmeno'];


	$query2 = MySQL_Query("SELECT * FROM `web`") or die (mysql_error());
	$Vysledek2 = mysql_fetch_array($query2);
	
	$domena= $Vysledek2['domena'];
	$kontakt= $Vysledek2['kontakt'];
	$webtitle= $Vysledek2['webtitle'];
	$headercode= $Vysledek2['headercode'];
	$footercode= $Vysledek2['footercode'];
	$footerlink= $Vysledek2['footerlink'];

    $query2 = MySQL_Query("SELECT * FROM `fb`") or die (mysql_error());
    $Vysledek2 = mysql_fetch_array($query2);
    
    $zobrazeni= $Vysledek2['zobrazeni'];
    $stranka= $Vysledek2['stranka'];
    $jazyk= $Vysledek2['jazyk'];
?>
<div class="contentbox3">
<form action="nastaveni_zprac.php" method="post" class="adminform">
<h3><?php print(_ADMINSETTINGS); ?></h3>

<table>
<tr>
<td colspan="4"><h2><?php print(_ADMINBASIC); ?></h2></td>
</tr>

<tr>
<td><?php print(_ADMINWEBTITLE); ?></td>
<td><?php print(_ADMINURL); ?></td>
<td><?php print(_ADMINEMAIL); ?></td>
<td></td>
</tr>
<tr>
<td><input type="text" name="webtitle" value="<?php echo $webtitle; ?>"></td>
<td><input type="text" name="domena" value="<?php echo $domena; ?>"></td>
<td><input type="text" name="kontakt" value="<?php echo $kontakt; ?>"></td>
<td></td>
</tr>

<tr>
<td colspan="4"><h2><?php print(_ADMINPAYPALSETTINGS); ?></h2></td>
</tr>
<tr>
<td><?php print(_ADMINALLOWPAYPAL); ?></td>
<td><?php print(_ADMINPAYPALACCOUNT); ?></td>
<td><?php print(_ADMINPAYPALTEXT); ?></td>
<td><?php print(_ADMINPAYPRICE); ?></td>

</tr>
<tr>
<td><div class="check_box"><input type="checkbox" name="allowp" <?php if ($allowp==1){echo " checked";}?> ></div></td>
<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
<td><input type="text" name="text" value="<?php echo $text; ?>"></td>
<td><input type="text" name="cena" value="<?php echo $cena; ?>"></td>
</tr>

<tr>
<td><?php print(_ADMINPAYCURRENCY); ?></td>
<td><?php print(_ADMINPAYRETURNTEXT); ?></td>
<td></td>
<td></td>
</tr>

<tr>
<td>
<select name="mena">
	<option value="USD" <?php if ($mena=="USD"){echo 'selected="selected"';}; ?>>United States Dollar ($)</option>
    <option value="CZK" <?php if ($mena=="CZK"){echo 'selected="selected"';}; ?>>Czech Koruna (CZK)</option>
    <option value="AUD" <?php if ($mena=="AUD"){echo 'selected="selected"';}; ?>>Australian Dollar (AUD$)</option>
    <option value="BRL" <?php if ($mena=="BRL"){echo 'selected="selected"';}; ?>>Brazilian Real (R$)</option>
    <option value="GBP" <?php if ($mena=="GBP"){echo 'selected="selected"';}; ?>>British Pound (&pound;)</option>
    <option value="CAD" <?php if ($mena=="CAD"){echo 'selected="selected"';}; ?>>Canadian Dollar (CAD$)</option>
    <option value="CNY" <?php if ($mena=="CNY"){echo 'selected="selected"';}; ?>>Chinese Yuan (&#20803;)</option>
    <option value="DKK" <?php if ($mena=="DKK"){echo 'selected="selected"';}; ?>>Danish Krone (kr.)</option>
    <option value="EUR" <?php if ($mena=="EUR"){echo 'selected="selected"';}; ?>>European Euro (&#8364;)</option>
    <option value="HKD" <?php if ($mena=="HKD"){echo 'selected="selected"';}; ?>>Hong Kong Dollar (HK$)</option>
    <option value="HUF" <?php if ($mena=="HUF"){echo 'selected="selected"';}; ?>>Hungarian Forint (Ft)</option>
    <option value="INR" <?php if ($mena=="INR"){echo 'selected="selected"';}; ?>>Indian Rupee (INR)</option>
    <option value="IDR" <?php if ($mena=="IDR"){echo 'selected="selected"';}; ?>>Indonesian Rupiah (Rp)</option>
    <option value="JPY" <?php if ($mena=="JPY"){echo 'selected="selected"';}; ?>>Japanese Yen (&yen;)</option>
    <option value="MXN" <?php if ($mena=="MXN"){echo 'selected="selected"';}; ?>>Mexican Peso (MEX$)</option>
    <option value="NZD" <?php if ($mena=="NZD"){echo 'selected="selected"';}; ?>>New Zealand Dollar (NZ$)</option>
    <option value="NOK" <?php if ($mena=="NOK"){echo 'selected="selected"';}; ?>>Norwegian Kroner (kr)</option>
    <option value="PLN" <?php if ($mena=="PLN"){echo 'selected="selected"';}; ?>>Polish Zloty (zl.)</option>
    <option value="RUB" <?php if ($mena=="RUB"){echo 'selected="selected"';}; ?>>Russian Ruble (RUB)</option>
    <option value="SAR" <?php if ($mena=="SAR"){echo 'selected="selected"';}; ?>>Saudi Riyal (SR)</option>
    <option value="SGD" <?php if ($mena=="SGD"){echo 'selected="selected"';}; ?>>Singapore Dollar (SGD$)</option>
    <option value="ZAR" <?php if ($mena=="ZAR"){echo 'selected="selected"';}; ?>>South African Rand (R)</option>
    <option value="SEK" <?php if ($mena=="SEK"){echo 'selected="selected"';}; ?>>Swedish Krona (kr)</option>
    <option value="CHF" <?php if ($mena=="CHF"){echo 'selected="selected"';}; ?>>Swiss Franc (CHF)</option>
    <option value="THB" <?php if ($mena=="THB"){echo 'selected="selected"';}; ?>>Thai Bhat (&#3647;)</option>
    <option value="TRY" <?php if ($mena=="TRY"){echo 'selected="selected"';}; ?>>Turkish Lira (TRY)</option>
    <option value="TWD" <?php if ($mena=="TWD"){echo 'selected="selected"';}; ?>>Taiwan Dollar (TWD)</option>
</select>

</td>
<td><input type="text" name="textreturn" value="<?php echo $textreturn; ?>"></td>
<td></td>
<td></td>
</tr>

<tr>
<td colspan="4"><h2><?php print(_ADMINMETA); ?></h2></td>
</tr>



<tr>
<td><?php print(_ADMINMETATITLE); ?></td>
<td><?php print(_ADMINMETADESCRIPTION); ?></td>
<td><?php print(_ADMINMETAKEYWORDS); ?></td>
<td><?php print(_ADMINMETALANG); ?></td>
</tr>
<tr>
<td><input type="text" name="title" value="<?php echo $title; ?>"></td>
<td><input type="text" name="description" value="<?php echo $description; ?>"></td>
<td><input type="text" name="keywords" value="<?php echo $keywords; ?>"></td>
<td><input type="text" name="lang" value="<?php echo $lang; ?>"></td>
</tr>


<tr>
<td colspan="4"><h2><?php print(_ADMINLOGIN); ?></h2></td>
</tr>

<tr>
<td><?php print(_USERNAME); ?></td>
<td><?php print(_OLDPASSWORD); ?></td>
<td><?php print(_NEWPASSWORD); ?></td>
<td><?php print(_NEWPASSWORDAGAIN); ?></td>
</tr>
<tr>
<td><input type="text" name="admin" value="<?php echo $jmeno; ?>"></td>
<td><input type="password" name="password1" value=""></td>
<td><input type="password" name="password2" value=""></td>
<td><input type="password" name="password3" value=""></td>
</tr>


<tr>
<td colspan="4"><h2><?php print(_ADMINFACEBOOK); ?></h2></td>
</tr>

<tr>
<td><?php print(_ADMINALLOFACEBOOK); ?></td>
<td><?php print(_ADMINFACEBOOKPAGEURL); ?></td>
<td><?php print(_ADMINFACEBOOKLANGUAGE); ?></td>
<td></td>
</tr>

<tr>
<td><div class="check_box"><input type="checkbox" name="fb" <?php if ($zobrazeni==1){echo " checked";}?> ></div></td>
<td><input type="text" name="fbstranka" value="<?php echo $stranka; ?>"></td>
<td><input type="text" name="fbjazyk" value="<?php echo $jazyk; ?>"></td>
<td></td>
</tr>

<tr>
<td colspan="4"><h2><?php print(_ADVANCEDSETTINGS); ?></h2></td>
</tr>

<tr>
<td colspan="2"><?php print(_ADVANCEDSETTINGSHEADERCODE); ?></td>
<td colspan="2"><?php print(_ADVANCEDSETTINGSFOOTERCODE); ?></td>
<td></td>
</tr>
<tr>
<td colspan="2"><textarea name="headercode" rows="10"><?php echo $headercode; ?></textarea></td>
<td colspan="2"><textarea name="footercode" rows="10"><?php echo $footercode; ?></textarea></td>
</tr>

<tr>
<td colspan="2"><?php print(_FOOTERLINK); ?></td>
<td colspan="2"></td>
<td></td>
</tr>
<tr>
<td colspan="2"><textarea name="footerlink" rows="10"><?php echo $footerlink; ?></textarea></td>
<td colspan="2"></td>
</tr>

<tr>
<td><input type = "submit" value = "<?php print(_SUBMIT); ?>"></td>
<td></td>
<td></td>
<td></td>
</tr>

</table>
</form>
</div>