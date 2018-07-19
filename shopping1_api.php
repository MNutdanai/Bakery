<?php
	include "connect.php";
	session_start();
// ".$_SESSION["customer_id"]."
		$id = $_POST["delete"];
		if ($conn->connect_error){
	    	die("Connection failed: " . $conn->connect_error);
	    	exit();
		}
		else{
			$sql = "DELETE FROM `basket` WHERE customer_id = ".$_SESSION["customer_id"]." and product_id = ".$id;
			$conn->query($sql);
		}
		header("location:shopping1.php");
?>