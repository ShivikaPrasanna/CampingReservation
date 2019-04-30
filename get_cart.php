<?php
include 'logincheck.php';

if ($_SERVER ["REQUEST_METHOD"] == "GET") {

	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	$username = $_SESSION["username"];
	$sql = "SELECT camp_id, camp_name,start_date,end_date from cart where username = '".$username."'";

	$resultset = $conn->query ( $sql );

	include 'close_db_con.php';

	$recJson = reToJson ( $resultset );

	$json_data = json_encode ( $recJson );
	echo $json_data;
}
?>