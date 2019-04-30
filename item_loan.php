<?php
include 'logincheck.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$camp_id = clean_input ( $_GET ["camp_id"] );
	$username = $_SESSION["username"];
	$camp_name = clean_input ( $_GET ["camp_name"] );

	$sql = "SELECT * from cart where username='" . $username ."' ";

	$result_set = $conn->query ( $sql );
	$count =0;
	if ($result_set->num_rows > 0) {
		while($row = $result_set->fetch_assoc ()){
			$sql1 = "INSERT INTO user_camps_db VALUES('".$username."','".$row["camp_id"]."')";
			if ($conn->query ( $sql1 ) === TRUE){
				$count++;
			}			
			
			
		}
		
		
		$sql2 = "DELETE FROM cart where username ='".$username."' ";
		if($count==0){
			echo "Camp Already Registered";
		}
		else{
			if($conn->query($sql2)==TRUE){
				echo "Registered for '".$count."' camps successfully";
			}
		}

		
	} else {
		echo "No Camps in Cart";
	}
}
?>