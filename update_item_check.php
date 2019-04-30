<?php
include 'admin_check.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {

	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$camp_id = clean_input ( $_GET ["camp_id"] );
	$camp_name = clean_input ( $_GET ["camp_name"] );
	$cost = clean_input ( $_GET ["cost"] );

	$sql = "UPDATE camps_db SET camp_id = '" . $camp_id . "',camp_name='" . $camp_name . "',cost='" . $cost . "' where camp_id=".$camp_id;
	if ($conn->query ( $sql ) === TRUE){
		echo '<script type="text/javascript">';
		echo 'alert("Camp Updated");';
		echo 'window.location.href = "update_item.php";';
		echo '</script>';
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("Camp cannot be Updated.");';
		echo 'window.location.href = "update_item.php";';
		echo '</script>';
	}
}
?>
