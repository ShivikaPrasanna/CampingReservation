<?php
include 'admin_check.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	$camp_id = clean_input ( $_GET ["camp_id"] );
	$sql = "DELETE FROM camps_db WHERE camp_id = '".$camp_id."' ";
	$sql1 = "DELETE FROM user_camps_db WHERE camp_id ='".$camp_id."' ";
	$conn->query($sql1);
	if ($conn->query($sql) === TRUE ){
		echo '<script type="text/javascript">';
		echo 'alert("Camp Deleted.");';
		echo 'window.location.href = "delete_item.php";';
		echo '</script>';
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'alert("Camp Does not exist. Try Again");';
		echo 'window.location.href = "delete_item.php";';
		echo '</script>';
	}
	include 'close_db_con.php';

}

?>
