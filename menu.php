<html>
<head>
	<title>Bakery</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu_style.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="icon" type="image/png" href="image/favicon.png">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<?php
		session_start();
	?>
	<script type="text/javascript">
		function chkpage(customer_id) {	
			if(customer_id=="0"){
				$( ".login" ).show();
				$( ".user" ).hide();
			}else{
				$( ".user" ).show();
				$( ".login" ).hide();
			}
		}
	</script>
</head>
<body onload="openCity(event, 'all'),chkpage(<?php echo $_SESSION["customer_id"]?>)">
	<?php include "connect.php"; ?>
	<header>
		<div class="container">
			<nav class="menubarlist">
				<ul>
					<li><a href="index.php" class="active">HOME</a></li>
					<li><a href="menu.php"><span>MENU</span></a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
			<div class="logo">
				<img src="image/logo.png">
			</div>
			<nav class="login">
				<a href="login.php" id="user"><div class="singin">Login</div></a> <!-- data-poptrox="iframe,540x390" -->
				<a href="register.php" id="user"><div class="register">Register</div></a><!-- data-poptrox="iframe,540x600" -->
			</nav>
			<nav class="user">
				<a href="shopping1.php" id="user"><div class="shopping">Shopping</div></a> <!-- data-poptrox="iframe,600x400" -->
				<div class="account">
					<div class="nameaccount"></div>
					<div class="imgaccount"></div>
				</div>
				<div class="solid"></div>
				<div class="logout">
					<form action="logout_api.php"><input type="submit" value="Logout"></form>
				</div>
			</nav>
			<script src="js/jquery.poptrox.min.js"></script>
			
		</div><!-- container -->
	</header>

	<div class="banner">
		<div class="con-banner">
			<div class="con-banner-headder">OUR MENU</div><br><span>New Menu , Special Menu , All Menu</span><br>
			เรามีสินค้ามากมายให้ลูกค้าได้เลือกสรรค์ตามต้องการ สินค้าที่มีคุณภาพสดใหม่ที่ทำวันต่อวัน
		</div>
	</div>

	<div class="container">
		<nav class="menubarlist-product">
			<ul >
				<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'all')">All</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Cake')">Cake</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Bread')">Bread</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Cookie')">Cookies</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Pie')">Pies</a></li>
				<li class="slider"></li>
			</ul>
		</nav>

		<!--  //////////////////////////// all /////////////////////////////////// -->
	<div id="all" class="tabcontent">
			
	<?php	
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{
    	$sql = "SELECT * FROM product ORDER BY product_name ";
    	$result = $conn->query($sql);// รันคอมมาน sql

    	if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
	?>
		
			<div class="set_product">
				<form method="POST" action="basket.php"> 
					<input type="submit"  value="+" class="pro_shopping">
					<input value="<?php echo $row["product_id"];?>" name="idpro" type="hidden">
				</form>
            	<div class="product_img">
            		<img src="image/product/<?php echo $row["product_imgae"];?>">
            	</div>
            	<div class="product_name"><?php echo $row["product_name"];?></div>
            	<div class="product_price">฿<?php echo $row["product_price"];?></div>
        	</div>
  	<?php }    
   		}
   	}
   	?>	
	</div>

	<!--  //////////////////////////// Cake /////////////////////////////////// -->
	<div id="Cake" class="tabcontent">
			
	<?php	
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{
    	$sql = "SELECT * FROM product WHERE product_type = '1'ORDER BY product_name";
    	$result = $conn->query($sql);// รันคอมมาน sql

    	if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
	?>
		
			<div class="set_product">
				<form method="POST" action="basket.php"> 
					<input type="submit"  value="+" class="pro_shopping">
					<input value="<?php echo $row["product_id"];?>" name="idpro" type="hidden">
				</form>
            	<div class="product_img">
            		<img src="image/product/<?php echo $row["product_imgae"];?>">
            	</div>
            	<div class="product_name"><?php echo $row["product_name"];?></div>
            	<div class="product_price">฿<?php echo $row["product_price"];?></div>
        	</div>
  	<?php }    
   		}
   	}
   	?>
	</div>
	<!--  //////////////////////////// Bread /////////////////////////////////// -->
	<div id="Bread" class="tabcontent">
			
	<?php	
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{
    	$sql = "SELECT * FROM product WHERE product_type = '2'ORDER BY product_name";
    	$result = $conn->query($sql);// รันคอมมาน sql

    	if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
	?>
		
			<div class="set_product">
				<form method="POST" action="basket.php"> 
					<input type="submit"  value="+" class="pro_shopping">
					<input value="<?php echo $row["product_id"];?>" name="idpro" style="display:none">
				</form>
            	<div class="product_img">
            		<img src="image/product/<?php echo $row["product_imgae"];?>">
            	</div>
            	<div class="product_name"><?php echo $row["product_name"];?></div>
            	<div class="product_price">฿<?php echo $row["product_price"];?></div>
        	</div>
  	<?php }    
   		}
   	}
   	?>
	</div>
	<!--  //////////////////////////// Cookie /////////////////////////////////// -->
	<div id="Cookie" class="tabcontent">
			
	<?php	
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{
    	$sql = "SELECT * FROM product WHERE product_type = '3'ORDER BY product_name";
    	$result = $conn->query($sql);// รันคอมมาน sql

    	if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
	?>
		
			<div class="set_product">
				<form method="POST" action="basket.php"> 
					<input type="submit"  value="+" class="pro_shopping">
					<input value="<?php echo $row["product_id"];?>" name="idpro" style="display:none">
				</form>
            	<div class="product_img">
            		<img src="image/product/<?php echo $row["product_imgae"];?>">
            	</div>
            	<div class="product_name"><?php echo $row["product_name"];?></div>
            	<div class="product_price">฿<?php echo $row["product_price"];?></div>
        	</div>
  	<?php }    
   		}
   	}
   	?>
	</div>
	<!--  //////////////////////////// Pie /////////////////////////////////// -->
	<div id="Pie" class="tabcontent">
			
	<?php	
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{
    	$sql = "SELECT * FROM product WHERE product_type = '4'ORDER BY product_name";
    	$result = $conn->query($sql);// รันคอมมาน sql

    	if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
	?>
		
			<div class="set_product">
				<form method="POST" action="basket.php"> 
					<input type="submit"  value="+" class="pro_shopping">
					<input value="<?php echo $row["product_id"];?>" name="idpro" style="display:none">
				</form>
            	<div class="product_img">
            		<img src="image/product/<?php echo $row["product_imgae"];?>">
            	</div>
            	<div class="product_name"><?php echo $row["product_name"];?></div>
            	<div class="product_price">฿<?php echo $row["product_price"];?></div>
        	</div>
  	<?php }    
   		}
   	}
   	?>
		</div>
		<script>
			function openCity(evt, cityName) {
		    	var i, tabcontent, tablinks;
		    	tabcontent = document.getElementsByClassName("tabcontent");
		    	for (i = 0; i < tabcontent.length; i++) {
		        	tabcontent[i].style.display = "none";
		    	}
		    	tablinks = document.getElementsByClassName("tablinks");
		    	for (i = 0; i < tablinks.length; i++) {
		       	 tablinks[i].className = tablinks[i].className.replace(" active", "");
		    	}
		    	document.getElementById(cityName).style.display = "block";
		    	evt.currentTarget.className += " active";
			}
		</script>
	</div>

	<footer>
		<div class="container">
			<div class="footercenter">
				<ul>
					<li><a href="#"><img src="image/footer_socail1.png" class="footer-scail"></a></li>
					<li><a href="#"><img src="image/footer_socail3.png" class="footer-scail"></a></li>
					<li><a href="#"><img src="image/footer_socail2.png" class="footer-scail"></a></li>
				</ul>
			</div><!-- footercenter -->
			<div class="footerdown">
				<input type="email" placeholder="กรุณากรอก อีเมลล์" class="email">
				<input type="submit" value="ติดตามข้อมูล" class="send">
			</div><!-- footerdown -->
		</div><!-- container -->
	</footer>

	
</body>
</html>