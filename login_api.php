 <?php
	include "connect.php";
	session_start();
	$user = $_POST["user"];
	$pass = $_POST["pass"];

	if($conn->connect_error){
		exit();
	}else{
		$sql = "SELECT * FROM customer WHERE customer_user = '".$user."' AND customer_pass = '".$pass."'";
		if($conn->query($sql)){
			
	        
	        $result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	$_SESSION["usernameafterlogin"]="done";
			    	$_SESSION["customer_id"] = $row["customer_id"];
			    }
			    header("location:index.php");
			}else{

				$_SESSION["usernameafterlogin"]="lose";
				header("location:login.php");
			}
		}else{
			$_SESSION["usernameafterlogin"]="lose";
			header("location:login.php");
		}
		$conn->close();
		

	}
?>