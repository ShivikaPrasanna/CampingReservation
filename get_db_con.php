<?php
	$conn = new mysqli ( "localhost", "root", "root","team28project", "8889");

	// check for connection
	if ($conn->connect_error) {
		die ( "Connection failed: " . $conn->connect_error );
	}
?>
