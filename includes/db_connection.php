<?php
	if($_SERVER['HTTP_HOST']=='localhost')
	{
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = 'punkrock';
		$dbname = 'coulton.org';
	}
	else
	{
		$dbhost = 'localhost';
		$dbuser = 'db_user';
		$dbpass = 'P1x3lz3e2013!';
		$dbname = 'admin_tdb';
	}
	if(!$conn = mysql_connect($dbhost, $dbuser, $dbpass)){
		echo mysql_error();
	}
	
	if(!mysql_select_db($dbname)){
		echo mysql_error();
	}
?>