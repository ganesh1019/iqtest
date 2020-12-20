<?php
include "../db.php";
$ID = $_GET['ID'];


$sql=mysql_query("DELETE FROM `vysledky` WHERE ID = '$ID'");


$backlink="admin.php?page=vysledky"; // presmerovani zpátky na adresu ze které bylo voláno
header ("Location: $backlink"); //změna hlavicky ( přesmerování )
ob_end_flush();


?>