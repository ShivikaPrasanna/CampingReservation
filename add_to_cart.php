<?php
include 'logincheck.php';

if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$camp_id = clean_input ( $_GET ["camp_id"] );
	$camp_name = clean_input( $_GET ["camp_name"]);
	$start_date = clean_input( $_GET["start_date"]);
	$end_date = clean_input( $_GET["end_date"]);
	$username = $_SESSION ["username"];

	$sql = "SELECT * from cart where username ='" . $username . "' and camp_id='" . $camp_id."'";

	$result_set = $conn->query ( $sql );

	if ($result_set->num_rows > 0) {
		echo "item already exist in cart";
	} else {
		$sql1 = "INSERT into cart values('" . $username . "','" . $camp_id . "','".$camp_name."','".$start_date."','".$end_date."')";

		if ($conn->query ( $sql1 ) === TRUE)
			echo "Cart update Successful";
	}
}
 
?>
