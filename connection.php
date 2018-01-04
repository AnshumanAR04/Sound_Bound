<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "songs";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Server Not Responding " . $conn->connect_error);
	}

?>