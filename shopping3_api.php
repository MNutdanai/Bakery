<?php
	session_start(); 
	include "connect.php";
	$_SESSION["phone"];
	$_SESSION["address"];
	$_SESSION["fullname"];
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{
    	$sql = "SELECT * FROM `order` WHERE 1";
		$result = $conn->query($sql);
		$num = $result->num_rows;
		$num+=1;
		//echo "num : ".$num."<br>";
		$sql = "select * from basket where customer_id = ".$_SESSION["customer_id"];
		//echo "basket : ".$sql."<br>";
		$result = $conn->query($sql);
    	if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
        		$sql = "insert into ordetail (order_id,customer_id,product_id,ordetail_num,ordetail_price) 
        		values (".$num.",".$_SESSION["customer_id"].",".$row["product_id"].",".$row["basket_num"].",".$row["basket_price"].")";
        		$conn->query($sql);
        		//echo "insert  ordetail : ".$sql."<br>";
        	}
        	$sql = "SELECT  sum(`ordetail_price`) as sum FROM `ordetail` WHERE order_id = ".$num;
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
    		$sql = "INSERT INTO `order`( `order_name`, `order_address`, `order_price`, `order_date`)
    		VALUES ('".$_SESSION["fullname"]."','".$_SESSION["address"]."',".$row["sum"].",now())";
    		//echo "INSERT order : ".$sql."<br>";
    		$conn->query($sql);
    		$sql = "DELETE FROM `basket` WHERE customer_id = ".$_SESSION["customer_id"];
    		$conn->query($sql);
        }
        header("location:shopping4.php");
	}
?>