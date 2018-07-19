<html>
<head>
	<title>Bakery</title>
	<link rel="stylesheet" type="text/css" href="css/shopping2_style.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="icon" type="image/png" href="image/favicon.png">
	<meta charset = "utf-8">
	<script type="text/javascript" src="js/jquery.min.js"></script>
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
<body onload="chkpage(<?php echo $_SESSION["customer_id"]?>)">
	<?php include "connect.php" ?>
	<header>
		<div class="container">
			<nav class="menubarlist">
				<ul>
					<li><a href="index.php" class="active">HOME</a></li>
					<li><a href="menu.php">MENU</a></li>
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
				<a href="shopping1.php" id="user"><div class="shoppingbt">Shopping</div></a> <!-- data-poptrox="iframe,600x400" -->
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

	<div class="container">
		<div class="shopping-step-box">
			<div class="box-step1">ตะกร้าสินค้า</div><div class="box-step-sloid"></div>
			<div class="box-step1">การจัดส่ง</div><div class="box-step-sloid"></div>
			<div class="box-step">ชำระเงิน</div>
		</div>
		<div class="shopping">
			<div class="shopping-box">
				<h4>จัดส่งผ่านไปร์ษณีไทย EMS</h4><br>
				<form action="shopping2_api.php" method="POST">
					<div class="input-text-box">First Name<br><input type="text" class="input-text" name="firstname"></div>
					<div class="input-text-box">Last Name<br><input type="text" class="input-text" name="lastname"></div>
					<div class="input-text-box">Phone Number<br><input type="text" class="input-text" name="phone"></div>
					<div class="input-text-box-add">Address<br><textarea class="input-text-add" name="address"></textarea> </div>
					<br>
					<div class="input-box">
						<div class="back-input"><a href="shopping1.php" >ถอยกลับ</a></div>
						<input type="submit" value="ต่อไป" name="next-input" class="next-input">
					</div>
				</form>
			</div>
			
		</div>
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