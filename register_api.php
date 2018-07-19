<?php
	include "connect.php";
	session_start();
	$fullname = $_POST["fullname"];
	$user = $_POST["user"];
	$pwd1 = $_POST["pwd1"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];

	if($conn->connect_error){
		exit();
	}else{
		$sql = "INSERT INTO customer (customer_img,customer_name,customer_user,customer_pass,customer_email,customer_phone)
		VALUES ('".$_FILES['picupload']['name']."','".$fullname."','".$user."','".$pwd1."','".$email."','".$phone."')";
		if($conn->query($sql)){
			$_SESSION["confirmregis"]="done";
	        $target_folder = "image/_upload/";
	        $target_filename = $target_folder . basename($_FILES["picupload"]["name"]);
			move_uploaded_file($_FILES["picupload"]["tmp_name"], $target_filename);
			header("location:index.php");
		}else{
			$_SESSION["confirmregis"]="lose";
			header("location:register.php");
		}
		$conn->close();
	}
?>