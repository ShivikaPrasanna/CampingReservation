<?php
include 'logincheck.php';
 
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$camp_id = clean_input ( $_GET ["camp_id"] );

	$username = $_SESSION ["username"];
	$sql = "DELETE from cart where camp_id ='" . $camp_id . "' and username='". $username."' ";

	if($conn->query ( $sql )){
		echo "Item deleted from cart";
	}
	else{
		echo "Delete unsuccessful";
	}


	include 'close_db_con.php';

}

?>
