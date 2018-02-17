<?php
	//Connecting to database:
	define("DB_HOST", "localhost");
	define("DB_NAME", "users");
	define("DB_USER", "root");
	define("DB_PASS", "");
	$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	mysqli_query($db_conn, "SET NAMES utf8");

	define("HOME_URL", "http://ggyt/");
	
?>