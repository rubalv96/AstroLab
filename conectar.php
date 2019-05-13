<?php

	$dbhost = "sql202.epizy.com";
	$dbuser = "epiz_23666376";
	$dbpass = "4oXRpV5M4cWRj";
	$dbname = "epiz_23666376_usuariosSQL";
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,  
				     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $error) {
		die("Error conexión BBDD " . $error->getMessage());
	}	
?>

