<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="image/favicon.png">
	<title>Bakery</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- <script src="js/jquery.poptrox.min.js"></script> -->
	<!-- <script>
		$(function() {	
			var foo = $('.container');
			foo.poptrox({
				usePopupCaption: false,
				popupPadding: 0
			});
		});
	</script> -->
	<?php
		session_start();
		if(isset($_SESSION["confirmregis"])==""){
			
		}else{
			if($_SESSION["confirmregis"]=="done"){
				?>
					<script type="text/javascript">
						alert("สมัครสมาชิกเรียบร้อย");
					</script>
				<?php
				$_SESSION["usernameafterlogin"]="";
				$_SESSION["customer_id"]="0";
			}
		}
		$_SESSION["confirmregis"]="";
		if (isset($_SESSION["usernameafterlogin"])=="" && isset($_SESSION["customer_id"])!=""){
			
		}else{
			if(isset($_SESSION["usernameafterlogin"])){
				if($_SESSION["usernameafterlogin"]!=""){
					if($_SESSION["usernameafterlogin"]=="done"){
					?>
						<script type="text/javascript">
							alert("เข้าสู่ระบบเรียบร้อย");
						</script>
					<?php
					$_SESSION["usernameafterlogin"]=="";
					}
					else{
						$_SESSION["usernameafterlogin"]="";
					}
				}
			}
			$_SESSION["usernameafterlogin"]="";
		}
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
					<li><a href="index.php" class="active"><span>HOME</span></a></li>
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
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="image/slide_01.jpg">
				<div class="imgtextbox">
					<div class="imgtextbox-title">Made With Love</div>
					<div class="imgtextbox-content">
						Lorem ipsum dolor sit amet, consectetur <br>
						adipiscing elit,
					</div>		
				</div>
			</li>
			<li>
				<img src="image/slide_02.jpg">
				<div class="imgtextbox">
					<div class="imgtextbox-title">Made With Love</div>
					<div class="imgtextbox-content">
						Lorem ipsum dolor sit amet, consectetur <br>
						adipiscing elit,
					</div>
				</div>
			</li>
			<li>
				<img src="image/slide_03.jpg">
				<div class="imgtextbox">
					<div class="imgtextbox-title">Made With Love</div>
					<div class="imgtextbox-content">
						Lorem ipsum dolor sit amet, consectetur <br>
						adipiscing elit,
					</div>
				</div>
			</li>
		</ul>
	</div><!-- flexslider -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation:"slide",pauseOnHover: true,slideshowSpeed: 4000,animationSpeed: 1000,
				start: function(slide){
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	
	<div class="container">
		<div class="ourstory">
			<div class="ourstory-left">
				<img src="image/ourstory.jpg">
			</div>
			<div class="ourstory-right">
				<div class="ourstory-right-title">Our Story</div>
				<div class="ourstory-right-text">
					Bakery นอกจากรูปแบบการตกแต่งร้านของเรามี<br>สไตล์ที่สามารถดึงดูดความสนใจได้เป็นอย่างดีแล้ว ขนมของเราก็โดดเด่นไม่แพ้กัน นอกจากลูกค้าจะสามารถนั่งทานที่ร้านและชมบรรยากาศภายในร้าน<br>ยังสามารถสั่งไปทานที่บ้านได้ นอกจากนั้นเรายังรับประกันคุณภาพในการจัดส่งเพื่อให้ขนมของเราปลอดภัย มีคุณภาพ  และส่งถึงมือลูกค้าอีกด้วย
				</div>
			</div>
		</div><!-- ourstory -->
	</div>
	
	<div class="ourservices">
		<div class="container">
			<div class="ourservices-title">Our Services</div>
			<div class="ourservices-content">
				ร้าน Bakery เราใส่ใจทุกรายระเอียดทุกขั้นตอน การเตรียมส่วนผสม การตกแต่ง การจัดส่ง <br>
รวมถึงการเคลมสินค้าได้เมื่อสินค้ามีปัญหา ทำให้มั่นใจได้ว่าสินค้าทุกชิ้นมีคุณภาพและถึงเมื่อลูกค้าอย่างแน่นอน
			</div>
			<div class="ourservices-box">
				<div class="ourservices-box-select">
					<div class="ourservices-box-select-title">- Choose Product -</div>
					<div class="ourservices-box-select-img">
						<img src="image/ourservices-logo1.png">
					</div>
					<div class="ourservices-box-select-content">
						เลือกสินค้าจากทางร้าน<br>
						เรานำเสนอสินค้าที่มีคุณภาพ<br>
						สดใหม่ทุกวันให้กับลูกค้า 
					</div>
				</div>
				<div class="ourservices-box-select">
					<div class="ourservices-box-select-title">- Basket Shoping -</div>
					<div class="ourservices-box-select-img">
						<img src="image/ourservices-logo2.png">
					</div>
					<div class="ourservices-box-select-content">
						สินค้าที่ลูกค้าที่ลูกค้าเลือก<br>
						จะอยู่ในตะร้าช้อปปิ้ง<br>
						และทำการชำระเงิน
					</div>
				</div>
				<div class="ourservices-box-select">
					<div class="ourservices-box-select-title">- Send -</div>
					<div class="ourservices-box-select-img">
						<img src="image/ourservices-logo3.png">
					</div>
					<div class="ourservices-box-select-content">
						แพ็คสินค้าและทำการจัดส่ง<br>
						ให้ถึงมือลูกค้าด้วย<br>
						บริการ EMS
					</div>
				</div>
				<div class="ourservices-box-select">
					<div class="ourservices-box-select-title">- Claim Product -</div>
					<div class="ourservices-box-select-img">
						<img src="image/ourservices-logo4.png">
					</div>
					<div class="ourservices-box-select-content">
						หากสินค้ามีปัญหาสามารถ<br>
						แจ้งรายระเอียดกลับมายังร้าน<br>
						ทางร้านจะส่งสินค้ากลับไป
					</div>
				</div>
			</div><!-- ourservices-box -->
		</div>
	</div><!-- ourservices -->
	<div class="recomment">
		<span>Recommend</span><br><br><br>
			<?php	
			include 'connect.php';
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    	exit();
	}
	else
	{
    	$sql = "SELECT * FROM product ORDER BY product_name ";
    	$result = $conn->query($sql);// รันคอมมาน sql
    	$loop = 0;
    	if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
        		if($loop >5){
        			break;
        		}
        		$loop++;
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
		
	</div><!-- recomment -->
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