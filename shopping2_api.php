<?php 
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];

	$fullname = $firstname." ".$lastname;
	
	session_start();

	$_SESSION["phone"] = $_POST["phone"];
	$_SESSION["address"] = $_POST["address"];
	$_SESSION["fullname"] = $fullname;

	header("location:shopping3.php");
?>