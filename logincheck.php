<?php
   //checks for user logged in
   //checks for session time out
   session_start();
  if (isset($_SESSION["username"]))
  {
    $expiry = 600 ; //10 min inactive time will cause session time out
    if (isset($_SESSION['last_activity']) &&
       (time() - $_SESSION['last_activity'] > $expiry)) {
        header("Location: login.html");
        session_destroy();
    }
    $_SESSION['last_activity'] = time();
  }
  else
  {
   header("Location: login.html");
   session_destroy();
   exit;
  }
?>
