
<div class="contentbox">

 <form action="kontakt2.php" method="get">

    <label for="jmeno"><?php print(_NAME); ?></label>
    <input type="text" name="jmeno" id="jmeno" />
    <br />
  <label for="email"><?php print(_EMAIL); ?></label>
  <input type="text" name="email" id="email" />
    <br />
  <label for="telefon"><?php print(_PHONENUMBER); ?></label>
    <input type="text" name="telefon" id="telefon" />
    <br />
  <label for="zprava"><?php print(_MESSAGE); ?></label>
    <textarea name="zprava" id="zprava" cols="45" rows="10"></textarea>
    <br />
  <input type="submit" name="button" id="button" value="<?php print(_SUBMIT); ?>" />
</form>

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