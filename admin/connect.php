<?php  

	$host = "localhost";
	$username = "admin";
	$password = "timesheet";
	$database = "timesheet";


	mysql_connect($host,$username,$password).mysql_select_db($database) or die("Connection to database failed");


?>
