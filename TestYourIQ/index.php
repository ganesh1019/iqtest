<?php
ob_start();
session_start(); // startujeme session. Všimněte si, že tento kód je úplně nahoře před jakýmkolik výstupem.

include "language/language.php";

require_once "db.php";	

	$query2 = MySQL_Query("SELECT * FROM `hlavicka`") or die (mysql_error());
	$query3 = MySQL_Query("SELECT * FROM `web`") or die (mysql_error());
	$Vysledek2 = mysql_fetch_array($query2);
	$Vysledek3 = mysql_fetch_array($query3);
	
	$title= $Vysledek2['title'];
	$description= $Vysledek2['description'];
	$keywords= $Vysledek2['keywords'];
	$lang= $Vysledek2['lang'];
	
	$headercode= $Vysledek3['headercode'];
	$footercode= $Vysledek3['footercode'];
	$footerlink= $Vysledek3['footerlink'];
	$webtitle= $Vysledek3['webtitle'];

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="robots" content="index, follow">
<meta name="description" content="<?php echo $description ?>">
<meta name="keywords" content="<?php echo $keywords ?>">
<title><?php echo $title ?></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="images/favicon.png" />

<!--HeaderCode-->
<?php echo $headercode ?>
<!--HeaderCode-->

</head>

<body>
<div id="wrapper">

   <div class="header">
   
    <h1><a href="index.php?page=uvod"><span><?php echo $webtitle ?></span></a></h1>
    

   </div> <!--Header-End-->
   
   <div class="navigation">
       <ul>
       <li><a href="index.php?page=uvod" <?php if (isset($_GET['page'])&& $_GET['page']== "uvod") echo 'class="active"'?>><?php print(_HOME); ?></a></li>
       <li><a href="start.php" <?php if (isset($_GET['page'])&& $_GET['page']== "test") echo 'class="active"'?>><?php print(_TAKETHETEST); ?></a></li>
       <li><a href="index.php?page=vysledek" <?php if (isset($_GET['page'])&& $_GET['page']== "vysledek") echo 'class="active"'?>><?php print(_SHOWRESULT); ?></a></li>
       <li><a href="index.php?page=kontakt" <?php if (isset($_GET['page'])&& $_GET['page']== "kontakt") echo 'class="active"' ?>><?php print(_CONTACT); ?></a></li>
       
       </ul>
       <div class="clear"></div>
      
   </div> <!--Navigation End-->
   <div class="clear"></div>
   
   
   
   <?php
error_reporting(0);
					 if (isset($_GET['page'])){        
					    $soubor=$_GET['page'];
					    $soubor2= dirname($_SERVER['SCRIPT_FILENAME'])."/".$soubor.".php";
					    if(file_exists($soubor2)){      
					       if(substr_count($soubor,"../")>0){ 
					           
					       }elseif($soubor=="index" or $soubor=="/index"){ 
					           
					       }else{
					           include $soubor2;
					       }
					    }else{                
					       include "inc/error404.php";
					    }
					  }else{                  
					    include "uvod.php";
					  }
						if(isset($_GET['Alert'])){
						require "cms/inc/error_msg.php"; 
						$JsAlert=$_GET['Alert'];
						echo '<script language="javascript" type="text/javascript">alert("'.$Rvi[$JsAlert].'");</script>';
					}	
					
ob_end_flush();
?>
 <div class="clear"></div>
 <div class="footer" >
 <div class="copyright"><?php echo $footerlink ?></div>
 </div> <!--Footer End-->
 
  
</div><!--Wrapper-End--> 

<?php echo $footercode ?>

</body>
</html>