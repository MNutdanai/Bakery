<?php
	session_start();
	$_SESSION["usernameafterlogin"]="";
	$_SESSION["customer_id"]="0";
	header("location:index.php");
?>