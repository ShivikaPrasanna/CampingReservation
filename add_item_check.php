<?php
include "admin_check.php";
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'clean_input.php';

	$camp_id = clean_input ( $_GET ["camp_id"] );
	$camp_name = clean_input ( $_GET ["camp_name"] );
	$cost = clean_input ( $_GET ["cost"] );
	$address = clean_input ( $_GET ["address"] );
	$phone_number = clean_input ( $_GET ["phone_number"] );
	$description = clean_input ( $_GET ["description"] );
	$start_date = clean_input ( $_GET ["start_date"] );
	$end_date = clean_input ( $_GET ["end_date"] );
	$image = clean_input ( $_GET ["image"] );

	$sql = "SELECT camp_id,camp_name from camps_db;";
	$resultset = $conn->query ( $sql );
	$val = false;
	if ($resultset->num_rows > 0) {
		while($row = $resultset->fetch_assoc ()){
			if($row["camp_id"]==$camp_id || $row["camp_name"]==$camp_name){
				$val = true;
			}
		}
		if($val==false){
			if($camp_id!=""&&$camp_name!=""&&$cost!=""&&$address!=""&&$phone_number!=""&&$description!=""&&$start_date!=""&&$end_date!=""&&$image!=""){
			$sql1 = "INSERT INTO camps_db VALUES('".$camp_id."','".$camp_name."','".$cost."','".$address."','".$phone_number."','".$description."','".$image."','".$start_date."','".$end_date."')";
			$conn->query($sql1);
			echo '<script type="text/javascript">';
			echo 'alert("Camp Added Successfully");';
			echo 'window.location.href = "add_item.php";';
			echo '</script>';
		}
		else{
			echo "Fields cannot be empty";
		}
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("Camp Already Exists");';
			echo 'window.location.href = "add_item.php";';
			echo '</script>';
		}
	}
	include 'close_db_con.php';
}
?>
