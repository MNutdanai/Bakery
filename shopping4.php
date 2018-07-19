<html>
<head>
	<title>Bakery</title>
	<link rel="stylesheet" type="text/css" href="css/shopping4_style.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
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
					<li><a href="index.php">HOME</a></li>
					<li><a href="menu.php">MENU</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</nav>
			<div class="logo">
				<img src="image/logo.png">
			</div>
			<nav class="login">
				<a href="login.php" id="user" data-poptrox="iframe,540x390"><div class="singin">Login</div></a>
				<a href="register.php" id="user" data-poptrox="iframe,540x600"><div class="register">Register</div></a>
			</nav>
			<nav class="user">
				<a href="#" id="user" data-poptrox="iframe,600x400"><div class="shoppingbt">Shopping</div></a>
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
		<div class="shopping">
		<div class="shopping-text">
			การสั่งซื้อสินค้าเสร็จสิ้น ทางเราจะจัดส่งสินค้าให้ถึงมือลูกค้า <br> ลูกค้าจะได้สินค้าภายใน 4 วันจากวันที่สั่ง <br> ขอบคุณคะ
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