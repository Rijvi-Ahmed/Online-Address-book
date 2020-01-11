<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "addressbookdb";

	//create a connection to the database

	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->error){
			die("Could not connect to database");

	}else
		echo "Rijvi is conncetd"
;


?> 