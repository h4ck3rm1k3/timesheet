<?php 
	include('config.php');


	$sql = mysql_query("SELECT * from time_sheet");

	$c = 0;
	while($fetch = mysql_fetch_assoc($sql)){
		echo $hours[$c] = $fetch['hour'];
		$p_id[$c] = $fetch['projects_id'];
		$c++;
	}

 ?>