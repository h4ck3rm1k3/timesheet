<?php 

		include('connect.php');


		$user = $_POST['name_txt'];
		$pass = $_POST['pass_txt'];
		$role = $_POST['role_txt'];

		mysql_query("INSERT INTO users(username,password,activity,permissions) VALUES('$user','$pass','1','$role')");



 ?>