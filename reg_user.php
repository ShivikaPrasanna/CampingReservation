<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {

	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';


	$name = clean_input ( $_POST ["name"] );
	$email_id = clean_input ( $_POST ["email"] );
	$pwd = clean_input ( $_POST ["pass"] );
	$username = clean_input ( $_POST ["username"] );

	$password = md5($pwd);
	echo $password;

	// insert new user
	$sql = "INSERT into users_db (
		username,name,password,email_address,role)
			VALUES ('" . $username . "','" . $name . "','" . $password . "','" . $email_id . "', 'user' )";

	if ($conn->query ( $sql ) === TRUE){
		echo '<script type="text/javascript">';
		echo 'window.location.href = "index.php";';
		echo '</script>';
		exit ();
	}
	else
	{
		//echo ("Error description: " . mysqli_error($conn));
		echo '<script type="text/javascript">';
		echo 'alert("Error description: " . mysqli_error($conn))';
		echo "alert('Cannot register!');";
		echo 'window.location.href = "login.html";';
		echo '</script>';
		exit ();
	}


}
?>
