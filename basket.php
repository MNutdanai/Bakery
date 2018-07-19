<?php
$idpro = $_POST["idpro"];
	include "connect.php";
 session_start();
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{   
        if($_SESSION["customer_id"]>0){
            $sql = "INSERT INTO basket(customer_id,product_id) VALUES (".$_SESSION["customer_id"].",".$idpro.")";
            if($conn->query($sql)){
                header("location:menu.php");
            }else{
                echo "error query";
            }
        }else{
            header("location:menu.php");
        }
    	
    }
?>