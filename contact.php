<html>
<head>
	<title>Bakery</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/menu_style.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="icon" type="image/png" href="image/favicon.png">
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
	<header>
		<div class="container">
			<nav class="menubarlist">
				<ul>
					<li><a href="index.php" class="active">HOME</a></li>
					<li><a href="menu.php">MENU</a></li>
					<li><a href="cpntact.php"><span>CONTACT</span></a></li>
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

	<div class="container">
		<div class="contact">
			<div class="contact-left">
				<img src="image/logo.png"><br>
				มหาวิทยาลัยศิลปากร วิทยาเขตสารสนเทศเพชรบุรี <br>เลขที่ 1 หมู่ 3 ตำบลสามพระยา อำเภอชะอำ <br>จังหวัดเพชรบุรี 76120
				<br> <br>089-4794039
			</div>
			<div class="contact-right">
				CONTACT US<br><br>
				<span>ติดต่อพูดคุย หรือ แสดงความคิดเห็นกับเรา</span> <br>
				<form action="" method="POST">
					<div class="input-text-box">NAME<br><input type="text" class="input-text" name="firstname"></div>
					<div class="input-text-box">E-MAIL<br><input type="text" class="input-text" name="lastname"></div>
					<div class="input-text-box">PHONE<br><input type="text" class="input-text" name="lastname"></div>
					<div class="input-text-box-add">MESSAGE<br><textarea type="text" class="input-text-add" name="lastname"></textarea></div>
				</form>
				<a href="contact.php"><input type="submit" value="send" name="next-input" class="next-input"></a>
			</div>
			<br>
		
				
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