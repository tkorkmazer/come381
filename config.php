<?php
   define('DB_SERVER', 'server');
   define('DB_USERNAME', 'username');
   define('DB_PASSWORD', 'pass');
   define('DB_DATABASE', 'db');




   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");
   // Check connection
	if($db === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>