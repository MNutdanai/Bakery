<?php
session_start();
include "connect.php";
if($conn->connect_error){
	exit();
}else{
	$sql = "select * from basket inner join  product where customer_id = ".$_SESSION["customer_id"]." and product.product_id = basket.product_id";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		echo $sql;
		while($row = $result->fetch_assoc()){
			$num = $row["product_id"];
			$input = $_POST[$num];
			$price = $row["product_price"] * $input;
			echo $price;
			$sql = "UPDATE `basket` SET `basket_num`=".$input.",`basket_price`= ".$price." WHERE customer_id = ".$_SESSION["customer_id"]." and basket.product_id = ".$num;
			$conn->query($sql);
		}
		header("location:shopping2.php");
	}else{
		header("location:shopping1.php");
	}
}
?>