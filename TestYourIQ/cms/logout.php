<?php   
ob_start();
// odhlaseni autora
if(IsSet($_GET['logout']) and $_GET['logout']=="yes") {
  Session_Start();
  Session_Destroy();
}
header ("location: admin.php?Alert=7");
ob_end_flush();
?>