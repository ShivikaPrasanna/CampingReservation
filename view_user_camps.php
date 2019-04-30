<?php
include 'logincheck.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	$username = $_SESSION["username"];
	$sql = "SELECT t1.camp_id, t1.camp_name,t1.description,t1.cost,t1.start_date,t1.end_date from camps_db as t1,user_camps_db as t2 where t1.camp_id = t2.camp_id and t2.username ='".$username."'";
	$resultset = $conn->query ( $sql );

	include 'close_db_con.php';

	$rs = array ();
	$rs = addToArr($resultset,$rs);
	$rs = addToArr($resultset1,$rs);
	$rs = addToArr($resultset2,$rs);
	$rs = addToArr($resultset3,$rs);
	$rs = addToArr($resultset4,$rs);
	$rs = addToArr($resultset5,$rs);

	$json_data = json_encode ( $rs );
	echo $json_data;
}
?>
