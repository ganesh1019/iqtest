<div class="contentbox2">
<h2><?php print(_PLEASELOGIN); ?></h2>

   <form action="login_zpracuj.php" method="post">

    <label for="jmeno"><?php print(_USERNAME); ?></label>
    <input type="hidden" name="sent" value=""/>
    <input type="text" name="jmeno" maxlength="32"/> 
    <br />
  <label for="email"><?php print(_PASSWORD); ?></label>
  <input type="password" name="heslo" maxlength="32"/>
    <br />
 
  <input type="submit" name="send" id="button" value="<?php print(_LOGIN); ?>"/>
  </form>
  


</div>