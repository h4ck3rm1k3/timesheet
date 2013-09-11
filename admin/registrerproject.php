<?php 
	include('connect.php');


		$p_name = $_POST['p_name'];
		$desc = $_POST['desc_txt'];

		$startd = $_POST['start_date_txt'];

		$enddate = $_POST['end_date_txt'];

		$user_id = $_POST['user_id'];
		$p_hours = $_POST['project_hours'];


		mysql_query("INSERT INTO projects(project_name,users_id,project_hour,project_description,project_deadline) VALUES('$p_name','$user_id','$p_hours','$desc','$enddate')");


		$query = mysql_query('SELECT * FROM projects ORDER BY project_id DESC LIMIT 1');

		while($fetch = mysql_fetch_assoc($query)){
			echo $id = $fetch['project_id'];
			$nr_days = date('t');
			$month = date('m');
			// $inserted_id = $fetch['project_id'];
			
				
		}

		for($i = 1; $i <= $nr_days ;$i++){
			mysql_query("INSERT INTO time_sheet(projects_id,month,day,hour) VALUES('$id','$month','$i','0')");
		}

 ?>