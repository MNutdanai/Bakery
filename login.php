<html>
<head>
	<title>Bakery</title>
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
	<link rel="icon" type="image/png" href="image/favicon.png">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<?php
		session_start();
		if(isset($_SESSION["usernameafterlogin"])==""){

		}else{
			if($_SESSION["usernameafterlogin"]==""){

			}else{
			?>
				<script type="text/javascript">
					alert("การเข้าสู่ระบบผิดพลาด");
				</script>
			<?php
			}
		}
		session_destroy();
	?>
</head>
<body>
	<div class="login">
		<div class="logo">
			<img src="image/logo.png">
		</div>
		<div class="login-box">
			<div class="title">LOGIN ACCOUNT</div>
			<div class="input">
				<form action="login_api.php" method="POST">
					<input type="text" class="login-input" placeholder="Username" name="user">
					<input type="password" class="login-input" placeholder="Password" name="pass">
					<input type="submit" class="login-submit" value="Sing in"><br>
				</form>
				<a href="register.php" id="user" ><div class="register">Create account</div></a>

			</div>
			
		</div>
	</div>
</body>
</html>