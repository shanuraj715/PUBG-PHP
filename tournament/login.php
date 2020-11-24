
<?php session_start();
	require "../config.php";
	require "../dbconnect.php";
	require "./function/functions.php";
	// checking if userid already logged in or not.
	// if then open dashboard else then remain in login page.
	checkLoginOrNot();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login to your account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php print($site_url);?>/tournament/css/login.css">
	<!-- site favicon icon -->
	<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
	<script type="text/javascript" src="<?php print($site_url);?>/tournament/function/functions.js"></script>
	<script>
		function changebackground(){
			document.getElementById("background").style.backgroundImage = "url('./images/backgrounds/01.jpg')";
		}
	</script>
</head>
<body onload="changebackground()" id="background">
	<div class="login_body">
		<div class="login_form">
			<?php
			if(getLoginRequest()=="login"){
				login_form();
			}
			elseif(getLoginRequest()=="signup"){
				signup_form();
			}
			?>
			<div class="back_btn_block">
				<a href="<?php print($site_url);?>/tournament" class="back_btn">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>

