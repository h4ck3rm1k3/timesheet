<?php

/*
		Author: Iwebux
		Description: configure db connection
		Copyright: iwebux.com
*/

define('DBHOST','localhost');
define('DBUSER','ardian_tmuser');
define('DBPASS','flossk');
define('DBNAME','ardian_timesheet');

$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	
mysql_select_db(DBNAME,$conn);

/*Check for data from the browser*/

if(isset($_POST['rownum']) && isset($_POST['update_remain'])){

	update_remaining($_POST['field'],$_POST['value'],$_POST['rownum']);

}

if(isset($_POST['rownum']) && isset($_POST['day']))
	
{
	update_days($_POST['field'],$_POST['value'],$_POST['rownum'],$_POST['day']);
}


if(isset($_POST['rownum']))
{
	update_data($_POST['field'],$_POST['value'],$_POST['rownum']);
}


/*Retrieve records from db*/

function get_data()
{

	$sql = "SELECT * from projects p where users_id = {$_SESSION['user_id']}";
	
	$rs = mysql_query($sql);
	
	return $rs;
}

/*Update records in db*/
function update_data($field, $data, $rownum)
{

	$sql = "UPDATE projects set $field = '$data' where project_id = '$rownum' ";
	
	mysql_query($sql) ;
	
}

function update_days($field, $data, $rownum,$day)
{

	$sql = "UPDATE time_sheet set $field = '$data' where projects_id = '$rownum' and day = '$day' ";
	
	mysql_query($sql) ;
	
}

function update_remaining($field, $data, $rownum)
{

	$sql = "UPDATE time_sheet set $field = '$data' where projects_id = '$rownum' ";
	mysql_query($sql);
	
}


?>
