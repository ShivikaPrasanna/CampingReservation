<?php
function reToJson($mysql_result) {
	$rs = array ();
	// fecth only numeric arrays using mysqli_num parameter to fetch_array
	while ( $row = mysqli_fetch_array ( $mysql_result, MYSQLI_ASSOC ) ) {
		$rs [] = $row;
	}
	return $rs;
}
 
function addToArr($mysql_result,$rs) {
	// fecth only numeric arrays using mysqli_num parameter to fetch_array
	while ( $row = mysqli_fetch_array ( $mysql_result,MYSQLI_ASSOC ) ) {
		$rs [] = $row;
	}
	return $rs;
}
?>
