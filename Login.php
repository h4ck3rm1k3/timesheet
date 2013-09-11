<?php 
	session_start();	
	require('config.php');
	
	$user = (isset($_POST['user']))? $_POST['user']:"";
	$pass = (isset($_POST['pass']))? $_POST['pass']:"";
	$query = mysql_query("SELECT * FROM users WHERE username = '$user' AND password = '$pass' AND activity = '1'");

	$u;
	$user_id;
	$p;
	$per;

	while($fetch = mysql_fetch_assoc($query)){

		 $user_id = $fetch['user_id'];
		 $u = $fetch['username'];
		 $p = $fetch['password'];
		 $per = $fetch['permissions'];
		 $_SESSION['user_id'] = $user_id;
		 $_SESSION['permission'] = $per;
		 
	     if(isset($_SESSION['user_id'])){

			header("Location: index.php");
			// echo $_SESSION['user_id'];

		 }

	}

	

 ?>