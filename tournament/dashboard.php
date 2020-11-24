<?php
	session_start();
	require "../config.php";
	require "../dbconnect.php";
	require "./function/functions.php";
	verifyLoggedIn();
	$page = "null";

	if((empty($_GET)) and (empty($_GET['n'])))
	{
		$page = "home";
	}
	else
	{
		if($_GET['n']=="profile")
		{
			$page = "profile";
		}
		else if($_GET['n']=="myaccount")
		{
			$page = "myaccount";
		}
		else
		{
			$page = "home";
		}
	}

	if($page=="home")
	{
		echo '<script>window.open(site_url+"/tournament", "_self")</script>';
	}
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Welcome <?php echo $_SESSION['username'];?></title>
		<link rel="stylesheet" type="text/css" href="<?php print($site_url);?>/tournament/css/dashboard.css">
		<script type="text/javascript" src="<?php print($site_url);?>/js/functions.js"></script>
		<script>			
			function toggle()
			{
				var type = document.getElementById('pass').getAttribute("type");
				if(type=="password")
				{
					document.getElementById('pass').setAttribute('type','text');
					document.getElementById('show_hide_pass').innerHTML = "Hide";
				}
				else
				{
					document.getElementById('pass').setAttribute('type','password');
					document.getElementById('show_hide_pass').innerHTML = "Show";
				}
			}
		</script>
		<script>
			function changebackground()
			{
				document.getElementById("background").style.backgroundImage = "url('./images/backgrounds/01.jpg')";
			}



		</script>
	</head>
	<body onload="changebackground()">
		<div class="background" id="background">
		<div class="back_btn">
			<a href="<?php print($site_url);?>/tournament" class="back" title="Go Back to previous page.">Back</a>
		</div>

		<div class="navbar_block">
			<div class="nav_btn_container">
				<div class="btns">
					<span class="small_title">Username</span>
					<span class="nav_link" href="#"><?php print($verify['username']);?></span>
				</div>
				<div class="btns">
					<span class="small_title">User Id</span>
					<span class="nav_link" href="#"><?php print($verify['u_id']);?></span>
				</div>
				<div class="btns">
					<span class="small_title">Character Id</span>
					<span class="nav_link" href="#"><?php print($verify['c_id']);?></span>
				</div>
				<div class="btns">
					<span class="small_title">InGame Name</span>
					<span class="nav_link" href="#"><?php print($verify['u_name']);?></span>
				</div>
				<div class="btns">
					<span class="small_title">Expire Session</span>
					<a class="nav_link" id="logout_btn" href="<?php print($site_url);?>/tournament/logout.php">Logout</a>
				</div>
			</div>
		</div>
		
			<?php
			if($page=="myaccount")
			{ ?>
				<div class="overview_block">
					<div class="main_title_block">
						<h1 class="main_title">Account Overview</h1>
					</div>
					<div class="overview_show_block">
						<span class="over_show_text">Character Id : </span>
						<span class="over_show_text"><?php print($verify['c_id']);?></span>
					</div>
					<div class="overview_show_block">
						<span class="over_show_text">Game User Name : </span>
						<span class="over_show_text"><?php print($verify['u_name']);?></span>
					</div>
					<div class="overview_show_block">
						<span class="over_show_text">Total Played Matches : </span>
						<span class="over_show_text"><?php print(totalMatches($userid));?></span>
					</div>
					<div class="overview_show_block">
						<span class="over_show_text">Total Kills : </span>
						<span class="over_show_text"><?php print(totalKills($userid));?></span>
					</div>
					<div class="overview_show_block">
						<span class="over_show_text">Maximum Kills : </span>
						<span class="over_show_text"><?php print(maxKills($userid));?></span>
					</div>
				</div>
				<div class="lastresult">
					<div class="main_title_block">
						<h1 class="main_title">Your Past Matches Result</h1>
					</div>
					<div class="result">
						<?php $count = 0; ?>
						<table>
							<tr>
								<th class="result_th" id="number">No.</th>
								<th class="result_th" id="match_name">Match Name</th>
								<th class="result_th" id="time">Time</th>
								<th class="result_th" id="date">Date</th>
								<th class="result_th" id="rank">Rank</th>
								<th class="result_th" id="kills">Kills</th>
								<th class="result_th" id="reg_fee">Entry Fee</th>
								<th class="result_th" id="earning">Earning</th>
							</tr>
							<?php printUserGameStat(); ?>
					</table>
					</div>
				</div>
			<?php
			}
			if($page=="profile")
			{ 
				if((empty($_GET['u_id'])) or (empty($_GET['c_id'])))
				{
					echo '<script>window.open(site_url+"/tournament","_SELF");</script>';
					exit();
				} ?>
				<div class="profile_block">
					<div class="basic_overview_block">
						<?php
						userProfileGetSqlData();
						?>
						<div class="main_title_block">
							<h1 class="main_title">My Profile</h1>
						</div>
						<div class="details_block">
							<fieldset class="profile_over">
								<legend class="username_show"><?php print($userdata['fname'].' '.$userdata['lname']);?></legend>
									<div class="detail_block">
										<form action="<?php print($site_url);?>/tournament/sql_pages/update_profile.php" method="POST" class="profile_form">
												<?php
													if(!empty($_GET['user']))
													{
														if($_GET['user']=="exist")
														{
															echo '<span>Username Already Exist. Try anoyher Username.</span>';
														}
													}?>
											<div class="username_block text_input_block">
												<label for="name" class="text5">Username</label>
												<input class="text5" type="text" name="username" value="<?php print($userdata['username']);?>" required>
											</div>
											<div class="password_block text_input_block">
												<label for="name" class="text5">Password</label>
												<input class="text5" type="password" id="pass" name="password" value="<?php print($userdata['password']);?>" required><span class="show_hide_pass" id="show_hide_pass" onclick="toggle()">Show</span>
											</div>
											<div class="user_id_block text_input_block">
												<label for="characterId" class="text5">User ID</label>
												<span class="character_span" type="text" name="characterid"><?php print($userdata['u_id']);?></span>
											</div>
											<div class="email_block text_input_block">
												<label for="email" class="text5">Email ID</label>
												<input class="text5" type="text" name="email" value="<?php print($userdata['email']);?>" required>
											</div>
											<div class="mobile_block text_input_block">
												<label for="mobile" class="text5">Mobile</label>
												<input class="text5" type="text" name="mobile" value="<?php print($userdata['mobile']);?>" required>
											</div>
											<div class="character_id_block text_input_block">
												<label for="characterId" class="text5">Character ID</label>
												<span class="character_span" type="text" name="characterid"><?php print($userdata['c_id']);?></span>
											</div>
											<div class="username_block text_input_block">
												<label for="gameUsername" class="text5">InGame Username</label>
												<input class="text5" type="text" name="u_name" value="<?php print($userdata['u_name']);?>" required>
											</div>
											<div class="gender_block">
												<label for="gender" class="text5">Gender</label>
												<div class="gender1_block">
													<input type="radio" name="gender" class="gender_radio" value="male" required><span class="gender_text">Male</span>
													<input type="radio" name="gender" class="gender_radio" value="female" required><span class="gender_text">Female</span>
												</div>
											</div>
											<div class="age_block">
												<label for="age" class="text5">Age</label>
												<select class="age_select" name="age">
													<option class="choose_age" value="<?php print($userdata['age']);?>"><?php print($userdata['age']);?></option>
													<?php
													for($printage=12;$printage<=50;$printage++)
													{ ?>
														<option class="choose_age" value="<?php print($printage);?>"><?php print($printage);?></option>
													<?php	
													} ?>
												</select>
											</div>
											<div class="state_block">
												<label for="state" class="text5">State</label>
												<select name="state" class="state_select">
													<option class="choose_age" value="<?php print($userdata['state']);?>"><?php print($userdata['state']);?></option>
												<?php
												$state1 = array("Andra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Delhi","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telagana","Tripura","Uttaranchal","Uttar Pradesh","West Bengal");
												foreach($state1 as $value)
												{ ?>
													<option value="<?php print($value);?>" class="state_option"><?php print($value);?></option>
													<?php
												} ?>
												</select>
											</div>
											<div class="notice_text_block">
												<span class="notice_text">After Update, you will be Logout from our server. Login again with new Userid Or Username and Password.</span>
											</div>
											<input type="hidden" name="url" value="<?php print($page_url);?>">
											<div class="submit_btn">
												<input type="submit" name="submit" value="Update Profile">
											</div>
										</form>
									</div>
									<div class="help_text_block">
										<span class="help_text">You can also contact us on : <strong>shanuraj715@gmail.com</strong></span>
									</div>
							</fieldset>
						</div>
					</div>
				</div>

			<?php
			} ?>

			<div class="dash_footer">
				<span class="footer_text">Copyright &copy; <script>document.write(getYear());</script> | All Rights Reserved</span>
			</div>
		</div>
	</body>
</html>