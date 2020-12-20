<div class="contentbox">
<h2><?php print(_READTHERESULT); ?></h2>

 <form action="nacist_vysledek.php" method="get">
 
  <label for="ssid"><?php print(_TESTID); ?></label>
  <input name="ssid" type="text"/>
  <br />
  <label for="bsms"><?php print(_SECURITYCODE); ?></label>
  <input name="bsms" type="text"/>
  <br />
  <input type="submit" name="button" id="button" value="<?php print(_SHOWRESULT); ?>" />
 
</form>
<?php
require_once "db.php";
$query = MySQL_Query("SELECT * FROM `web` WHERE ID = '1'") or die (mysql_error());
$Vysledek = mysql_fetch_array($query);  
$kontakt= $Vysledek['kontakt'];
?>

<p style="padding-top:15px;"><?php print(_TEXTRESULT); ?></p>

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
   <div class="clear"></div>