<?php
session_start ();
$username = $password = "";
$password = substr($password, 0, 100);

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	$username = clean_input ( $_POST ["user"] );
	$password = clean_input ( $_POST ["password"] );

	if ($username == "" || $password == "") {
		header ( "Location: login.html" );
		exit ();
	} else {

		include 'get_db_con.php';

		$sql = "select * from users_db where username= '" . $username."';";

		$resultset = $conn->query ( $sql );

		include 'close_db_con.php';

		$row = $resultset->fetch_assoc ();
		if($row["role"]=="admin"){
			$_SESSION ["username"]==$row["username"];
				header("Location: login_admin.php");
				exit();
		}
		else{
			$pass = $row["password"];
			//echo $pass;
			if ( $resultset->num_rows > 0) {
				if($row ["role"] == "admin"){
					$_SESSION ["username"]==$row["username"];
					header("Location: login_admin.php");
					exit();
				}
				if ($row["role"] == "user"){
					if(md5($password) === $pass){
						$_SESSION ["username"] = $username;
						$_SESSION ["role"] = $row["role"];
						header ( "Location: dashboard.php" );
						exit ();
					}
					else {
						echo '<script type="text/javascript">';
						echo 'alert("Incorrect password.");';
						echo 'window.location.href = "login.html";';
						echo '</script>';
						exit();
					}
				}
			}
			else {
				session_destroy ();
				echo '<script type="text/javascript">';
				echo 'alert("Invalid User.");';
				echo 'window.location.href = "login.html";';
				echo '</script>';
				exit ();
			}
		}
	}
}
function clean_input($input) {
	$input = trim ( $input );
	$input = stripslashes ( $input );
	$input = htmlspecialchars ( $input );
	return $input;
}

?>
