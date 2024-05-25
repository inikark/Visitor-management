<?php

 $server = "localhost";
$user = "pmauser";
 $dbName = "db_vms"; 
 $pass = "123456";
	$link = mysqli_connect($server, $user, $pass, $dbName);
		if(!$link)
			die("Error connecting database");




?>