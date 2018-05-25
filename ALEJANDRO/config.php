<?php

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'blog');

	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	mysqli_select_db($con,DB_DATABASE);
/*
	if ($con) {
		print "You are connected to MySQL server.<br />";
	}
	else {
		print "Connection failed. Try again.<br />";
	}
*/
?>