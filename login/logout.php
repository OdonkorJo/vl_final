<?php

//start the session
session_start();

//unsetting the two session id in login
unset($_SESSION['userID']);


// Redirect to login_view page 
header("../index.php");
exit();
?>
