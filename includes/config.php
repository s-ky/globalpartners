<?php
	
	$DBName = "collection";
	$DBUser = "root";
	$DBPass = "root";
	$DBHost = "localhost";
	mysql_set_charset("utf8");
	
	$DBLink = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);
	
	//對資料庫連線
	if(!$DBLink)
        die("無法對資料庫連線");
?>