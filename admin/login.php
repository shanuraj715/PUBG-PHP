<html>
	<head>
	<?php 
		require "../config.php";
		require "../dbconnect.php";
		session_start();
		if((isset($_SESSION['username'])) and (isset($_SESSION['password'])))
		{
			header('Location: '.$site_url.'/admin/dashboard.php');
		}
		if(empty($_GET))
		{
			$string = "";
			$wrong_class = "error_text_hide";
		}
		else if(empty($_GET['e']))
		{
			$wrong_class = "error_text_hide";
		}
		else
		{
			if($_GET['e']=='true')
			{
				$wrong_class = "error_text";
				$string = "Username Or Password Incorrect";
			}
			else if($_GET['e']=='false')
			{
				$wrong_class = "error_text";
				$string = "You Account Is Blocked. Please Contact The Support at 'cs_pubg@techfacts007.in'";
			}
			else
			{
				$wrong_class = "error_text_hide";
				$string = "";
			}
		}
	?>
	<title>Login | <?php echo $site_title; ?></title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	</head>
	<body>
		<div class="back_section">
			<div class="form_container">
				<h1 class="form_title">Login</h1>
				<p class="<?php echo $wrong_class; ?>"><?php echo $string; ?></p>
					<hr class="hr" />
				<form name="login_form" method="post" action="login-validate.php">
					<h2 class="title">Username</h2> <!-- Heading for Username -->
					<input class="text_box" type="text" name="user" placeholder="Username" required> <!-- Inputbox of Username -->
					<h2 class="title">Password</h2> <!-- Heading for Password -->
					<input class="text_box" type="password" name="pass" placeholder="Password" required> <!-- Inputbox for Password -->
					<input type="text" name="key" value="true" hidden> <!-- this is used for security. the validation page will use this key to start query. if this key is missing then the validation page will return false and send the user to login page -->
					<div class="btn_container">
						<input class="submit_btn" type="submit" name="" value="Login"> <!-- Submit Button -->
						<input class="reset_btn" type="reset" name="" value="Reset"> <!-- Reset Button -->
					</div>
				</form>
				<div class="home_btn">
					<a class="home_btn" href="<?php echo $site_url; ?>">Go Back To Homepage</a>
				</div>
			</div>
		</div>
	</body>
</html>