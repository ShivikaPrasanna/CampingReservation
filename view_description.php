<?php
    session_start();
    include 'logincheck.php';
    include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$username = $_SESSION["username"];

		$camp_id = clean_input ( $_GET ["camp_id"] );
		echo " '".$camp_id."' ";
		//$camp_name = clean_input ( $_GET ["camp_name"] );
		$sql = " SELECT * from camps_db where  camp_id='".$camp_id."' ";

		$result_set = $conn->query( $sql );
		$row = $result_set->fetch_assoc();
		$_SESSION["camp_name"]=$row["camp_name"];
		$_SESSION["image"] = $row["image"];
		$_SESSION["description"] = $row["description"];
		$_SESSION["address"] = $row["address"];
		$_SESSION["phone_number"] = $row["phone_number"];

	}
?>
