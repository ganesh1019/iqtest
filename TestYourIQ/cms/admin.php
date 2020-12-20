<?php
ob_start();
session_start(); // startujeme session. Všimněte si, že tento kód je úplně nahoře před jakýmkolik výstupem.
require_once "../db.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../language/language.php";

$query3 = MySQL_Query("SELECT * FROM `web`") or die (mysql_error());
$Vysledek3 = mysql_fetch_array($query3);
$footerlink1= $Vysledek3['footerlink'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>ADMIN - IQ</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Oswald:300&subset=latin,latin-ext" rel="stylesheet" type="text/css">

</head>
<body>

<div id="wrapper">

   <div class="header">
   
    <h1><a href="admin.php"><?php print(_ADMINCONTROLPANEL); ?></a></h1>
    

   </div> <!--Header-End-->
   
   <div class="navigation">
       <ul>
       <li><a href="admin.php?page=nastaveni" <?php if (isset($_GET['page'])&& $_GET['page']== "nastaveni") echo 'class="active"'?>><?php print(_ADMINSETTINGS); ?></a></li>
       <li><a href="admin.php?page=vysledky" <?php if (isset($_GET['page'])&& $_GET['page']== "vysledky") echo 'class="active"'?>><?php print(_ADMINRESULTS); ?></a></li>
       <li><a href="admin.php?page=testy" <?php if (isset($_GET['page'])&& $_GET['page']== "testy") echo 'class="active"'?>><?php print(_ADMINEDIT); ?></a></li>
       <?php
				if(isset($_SESSION['prihlasen']) and $_SESSION['prihlasen']==1){
					$jmeno=$_SESSION['login'] ;
					// vleze do databaze a najde uzivatele
					
				$query = MySQL_Query("SELECT * FROM `iqadmin` WHERE `jmeno` = '$jmeno ' ") or die (mysql_error());
				
				$Vysledek = mysql_fetch_array($query);
				
					echo "<li><a href='logout.php?logout=yes'>"._LOGOUT."</a></li>";
					}else
					{echo "<li><a href='admin.php?page=login'>"._LOGIN."</a></li>";
						}
			?>
       
       </ul>
       <div class="clear"></div>
      
   </div> <!--Navigation End-->
   <div class="clear"></div>
   <?php if(isset($_SESSION['prihlasen'])){		?>
   
   <?php
					 if (isset($_GET['page'])){        // pokud byl odeslán ?page= ...
					    $soubor=$_GET['page'];
					    $soubor2= dirname($_SERVER['SCRIPT_FILENAME'])."/".$soubor.".php";
					    if(file_exists($soubor2)){      //pokud soubor existuje, načteme ho do středu
					       if(substr_count($soubor,"../")>0){ // pokud je v parametru alespoň 1x ../ neumožíme soubor načíst
					           echo "<h3>Upozornění</h3>Nelze nahrát soubor v nadřazeném adresáři!";
					       }elseif($soubor=="index" or $soubor=="/index"){ // index načíst nepovolíme, vznikl by nekonečný cyklus
					           echo "<h3>Upozornění</h3>Index nemůže načíst sám sebe!";
					       }else{
					           include $soubor2;
					       }
					    }else{                //pokud soubor neexistuje, zavoláme error404.php
					       include "inc/error404.php";
					    }
					  }else{                  // Pokud nebyl paramentr page volaný, načteme uvod.php
					    include "nastaveni.php";
					  }
										if(isset($_GET['Alert'])){
						require "inc/error_msg.php"; // V tomto souboru jsou ty hlasky
						$JsAlert=$_GET['Alert'];
						echo '<script language="javascript" type="text/javascript">alert("'.$Rvi[$JsAlert].'");</script>';
					}	
					?>
                    
                    <?php }
else 
include("login.php");
?>
 <div class="clear"></div>
 <div class="footer" >
 <div class="copyright"><?php echo $footerlink1 ?></div>
 </div> <!--Footer End-->
 
  
</div><!--Wrapper-End--> 

</body>
</html>
