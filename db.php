<?php 
 define('_WRONGDBCONNECTION4', 'Incorrect DB Username, Server or Password in file db.php');
 define('_WRONGDBCONNECTION3', 'Incorrect DB Name in file db.php');
 $spojeni = 
    mysql_connect(
	
	"localhost", //Server
	"DB_USERNAME", //DB Username
	"DB_PASSWORD" //DB Paswoord
	
	
	 ) or die (_WRONGDBCONNECTION4);
	mysql_select_db(
	
	
	"DB_NAME", //DB Name
	
	
	 $spojeni) or die (_WRONGDBCONNECTION3);
	mysql_query("SET NAMES utf8");

?>
