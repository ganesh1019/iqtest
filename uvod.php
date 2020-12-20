<div class="imagebar">
   </div> <!--ImageBar End-->
   
   
   <div class="contentbox2">
   <h2><?php print(_IQTEST); ?></h2>
   <p><?php print(_IQTESTTEXT1); ?></p>
   <h2><?php print(_IQTESTPROCESS); ?></h2>
   <p><?php print(_IQTESTTEXT2); ?></p>
   <h2><?php print(_IQTESTCOMPLETION); ?></h2>
   <p><?php print(_IQTESTTEXT3); ?></p>
   
   </div> <!--Textbox-End-->
   
   <div class="runtestbutton">
   
   <a href="start.php"><?php print(_TAKETHETEST); ?></a>
   
   </div> <!--RunTestButton End-->
   
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

    <div class="fb-like-box" data-href="'.$stranka.'" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false" data-width="330" data-height="220"></div>
    ';

}
?>

   

   <div class="clear"></div>
   </div>
   
   <div class="clear"></div>