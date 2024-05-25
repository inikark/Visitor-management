<?php

	$server = "localhost";
	$user = "pmauser";
	$pass = "123456";
	$dbName = "db_vms";
	
	$link = mysqli_connect($server, $user, $pass, $dbName);
	
	if(!$link)
		die("Error".mysqli_error());
	

?>