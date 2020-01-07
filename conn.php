<?php
	$conn = new mysqli('localhost', 'root', '', 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>