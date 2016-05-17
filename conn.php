<?php	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbforproject";

	$conn = new mysqli("localhost","root","","dbforproject");
	if ($conn->connect_error) {
		die("Connection failed:".$conn->connect_error);
	}
?>