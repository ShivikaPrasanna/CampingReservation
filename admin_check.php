<?php 
session_start();
if (isset ( $_SESSION ["username"] )) {
	if ($_SESSION ["role"] != 'admin') {
		echo "You do not have permission to access this page";
		header("Location: login.html");
		session_destroy();
		exit;
	}
}
?>
