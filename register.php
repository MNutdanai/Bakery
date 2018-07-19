<html>
<head>
	<title>Bakery</title>
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/styleregister.css">
	<link rel="icon" type="image/png" href="image/favicon.png">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(function () {
			    $(":file").change(function () {
			        if (this.files && this.files[0]) {
			            var reader = new FileReader();
			            reader.onload = imageIsLoaded;
			            reader.readAsDataURL(this.files[0]);
			        }
			    });
			});

			function imageIsLoaded(e) {
			    $('#myImg').attr('src', e.target.result);
			};
			//$("#sent").prop('disabled', true);
			//$("#sent").css("background-color:blue");
			// $("#sent").prop('disabled', false);
		});
	</script>
	<script type="text/javascript">
	  	function checkForm(form){
		  	chk=false;
		    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
		      
		      chk= true;
		    } else if(isNaN(form.phone.value)){
		    alert("กรุณากรอกเบอร์โทรศัพท์เป็นตัวเลข");
		      form.phone.focus();
		      chk= false;

		    else {
		      alert("กรุณายืนยันพาสเวิร์ดให้ถูกต้อง");
		      form.pwd1.focus();
		      chk= false;
		    }
		    return chk;
		   
	  	}
	</script>
	<?php
		session_start();
		if(!isset($_SESSION["confirmregis"])){
			
		}else{
			if($_SESSION["confirmregis"]=="lose"){
				?>
					<script type="text/javascript">
						alert("การสมัครสมาชิกผิดพลาด");
					</script>
				<?php
			}
		}
		session_destroy();
	?>
</head>
<body>
	<div class="reginter">
		<div class="logo">
			<img src="image/logo.png">
		</div>
		<div class="reginter-box">
			<div class="title">REGISTER</div>
			<form onsubmit="return checkForm(this);" action="register_api.php" method="POST" enctype="multipart/form-data">
				<div class="optionusersend-img">
					<img id="myImg" src="image/upload.jpg" alt="your image" accept="image/x-png;image/gif;image/jpeg" name="pic"><br>
					<input type="file" accept="image/x-png;image/gif;image/jpeg" name="picupload">
				</div>
				<div class="group">      
			      <input type="text" class="action" id="fullname" required name="fullname" maxlength="40" autofocus>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>FULL NAME</label>
			    </div>
			    <div class="group">      
			      <input type="text" class="action" required name="user" maxlength="30">
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>USERNAME</label>
			    </div>
			    <div class="group">      
			      <input type="PASSWORD" class="action" id="password" required name="pwd1" maxlength="30">
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>PASSWORD</label>
			    </div>
			    <div class="group">      
			      <input type="PASSWORD" class="action" id="re-password" required name="pwd2" maxlength="30">
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>CONFIRM PASSWORD</label>
			    </div>
			    <div class="group">      
			      <input type="text" class="action" id="email" required name="email" maxlength="50">
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>E-MAIL</label>
			    </div>
			    <div class="group">      
			      <input type="text" class="action" id="phone" required name="phone" maxlength="10">
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>PHONE NUMBER</label>
			    </div>
			    <input type="submit" value="Create account" class="reginter-submit" id="submit">
		  	</form>
		</div>
	</div> 
</body>
</html>