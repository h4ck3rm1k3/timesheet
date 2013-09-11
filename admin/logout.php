<?php 
	include('login.php');

	if(isset($_SESSION['user_id'])){
		session_destroy();
		header("Location: Login.php");
	}else{
		header("Location: Login.php");
	}

 ?>