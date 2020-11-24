<?php

require "../config.php";
require "../dbconnect.php";

function changeMode($mode)
{
	if($mode==1)
	{
		return("Classic");
	}
	else if($mode==2)
	{
		return("Arcade");
	}
	else
		return("Data Error");
}

function changeMap($map)
{
	if($map==1)
	{
		return("Erangel");
	}
	else if($map==2)
	{
		return("Miramar");
	}
	else if($map==3)
	{
		return("Sanhok");
	}
	else if($map==4)
	{
		return("Vikendi");
	}
	else
		return("Data Error");
}

function changeType($type)
{
	if($type==1)
	{
		return("Solo");
	}
	else if($type==2)
	{
		return("Duo");
	}
	else if($type==3)
	{
		return("Squad");
	}
	else
		return("Data Error");
}


function changeView($view)
{
	if($view==1)
	{
		return "TPP";
	}
	else if($view==2)
	{
		return "FPP";
	}
}

function changeEmulator($em)
{
	if($em==0)
	{
		return "Emulators Not Allowed";
	}
	else if($em==1)
	{
		return "Emulators Allowed";
	}
	else
		return "Data Error";
}


function totalMatches($userid)
{
	global $dbconnect;
	$sql = "SELECT count(u_id) as total_matches from user_result where `u_id`='$userid'";
	$result1 = mysqli_query($dbconnect, $sql);
	$data = mysqli_fetch_assoc($result1);
	return($data['total_matches']);
}

function totalKills($userid)
{
	global $dbconnect;
	$sql = "SELECT sum(kills) as total_kills from user_result where `u_id`='$userid'";
	$result1 = mysqli_query($dbconnect, $sql);
	$data = mysqli_fetch_assoc($result1);
	return($data['total_kills']);
}

function maxKills($userid)
{
	global $dbconnect;
	$sql = "SELECT MAX(kills) as max_kills from user_result where `u_id`='$userid'";
	$result1 = mysqli_query($dbconnect, $sql);
	$data = mysqli_fetch_assoc($result1);
	return($data['max_kills']);
}


// verification for dashboard.php page. If logged in or not.
function verifyLoggedIn()
{
	global $dbconnect;
	if((!isset($_SESSION['username'])) and (!isset($_SESSION['userid'])))
	{
		session_destroy();
		echo '<script>window.open(site_url+"/tournament/login.php", "_self")</script>';
		exit();
	}
	elseif((isset($_SESSION['username'])) and (isset($_SESSION['userid'])))
	{
		global $userid;
		$userid = $_SESSION['userid'];
		$sql = "SELECT * from users where `u_id`='$userid'";
		$result = mysqli_query($dbconnect, $sql);
		global $verify;
		$verify = mysqli_fetch_assoc($result);
		if($verify['username']!=$_SESSION['username'])
		{
			session_destroy();
			echo '<script>window.open(site_url+"/tournament/login.php", "_self")</script>';
			exit();
		}
	}
}


function printUserGameStat()
{
	global $userid;
	global $dbconnect;
	global $count;
	$sql = "SELECT * from user_result where `u_id`='$userid' LIMIT 25";
	$result1 = mysqli_query($dbconnect, $sql);
	$user_result = mysqli_fetch_assoc($result1);
	if($user_result['m_id']!="")
	{
		do{ 
			$match_id = $user_result['m_id'];
			$sql = "SELECT `name`, `time`, `date`, `reg_fee` from tournament where `id`='$match_id'";
			$result2 = mysqli_query($dbconnect, $sql);
			$tournament_result = mysqli_fetch_assoc($result2);
			$count += 1;
			?>
			<tr class="td_hover">
				<td id="number"><?php print($count);?></td>
				<td id="match_name"><?php print($tournament_result['name']);?></td>
				<td id="time"><?php print($tournament_result['time']);?></td>
				<td id="date"><?php print($tournament_result['date']);?></td>
				<td id="rank"><?php print($user_result['rank']);?></td>
				<td id="kills"><?php print($user_result['kills']);?></td>
				<td id="reg_fee"><?php print($tournament_result['reg_fee']);?></td>
				<td id="earning">Rs. <?php print($user_result['tot_earning']);?></td>
			</tr>
		<?php
		} while ($user_result=mysqli_fetch_assoc($result1));
	}
}


function userProfileGetSqlData()
{
	global $userid;
	global $userdata;
	global $dbconnect;
	$userid = $_SESSION['userid'];
	$characterid = $_GET['c_id'];
	$sql = "SELECT * from users where `u_id` = '$userid' AND `c_id` = '$characterid'";
	$result = mysqli_query($dbconnect,$sql);
	$userdata = mysqli_fetch_assoc($result);
}












//login page function to find if request is for login or signup

function getLoginRequest()
{
	if(!empty($_GET['p']))
	{
		if($_GET['p']=="signup")
		{
			$requestfor = "signup";
			return $requestfor;
		}
		else
		{
			$requestfor = "login";
			return $requestfor;
		}
	}
	else
	{
		$requestfor = "login";
			return $requestfor;
	}
}


// Starting functions for user login

//check for loggedin or not.
function errorText()
{
	$error = "";
	if(getLoginRequest()=="login")
	{
		if(empty($_POST['username']))
		{
			$error = '<script>window.open(site_url+"/tournament/login.php?res=Form Data Error! Please Refill The Form And Submit Again", "_SELF");</script>';
		}
		if(empty($_POST['password']))
		{
			$error = '<script>window.open(site_url+"/tournament/login.php?res=Form Data Error! Please Refill The Form And Submit Again", "_SELF");</script>';
		}
	}
	elseif(getLoginRequest()=="signup")
	{

	}
	return $error;
}

function checkLoginOrNot()
{
	if((isset($_SESSION['username'])) and (isset($_SESSION['userid'])))
	{
		echo '<script>window.open(site_url+"/tournament/dashboard.php?n=myaccount", "_SELF")</script>';
		exit();
	}
}

function validateUsername($username)
{
	if(strlen($username)>5 or strlen($username)<32)
	{
		$username_space = strrpos($username, " ");
		if(!$username_space)
		{
			return true;
			exit();
		}
		else
		{
			echo '<script>window.open(site_url+"/tournament/login.php?err=Invalid Login Data. Username must not have any space. Please Remove The Space.", "_SELF");</script>';
			exit();
		}
	}
	else
	{
		echo '<script>window.open(site_url+"/tournament/login.php?err=Username length mest me gteater than 5 characters and less than 32 Characters.", "_SELF");</script>';
		exit();
	}
}

function validatePassword($password)
{
	if(strlen($password)>6 or strlen($password)<32)
	{
		return true;
	}
	else
	{
		echo '<script>window.open(site_url+"/tournament/login.php?err=Password length mest me gteater than 8 characters and less than 32 Characters.", "_SELF");</script>';
		exit();
	}
}

function verifyLogin($username,$password)
{
	global $dbconnect;
	$sql = "SELECT * from users where `username` = '$username' and `password` = '$password'";
		$result = mysqli_query($dbconnect, $sql);
		$data = mysqli_fetch_assoc($result);

		if(($username==mysqli_real_escape_string($dbconnect,$data['username'])) and $password==mysqli_real_escape_string($dbconnect,$data['password']))
		{
			$_SESSION['username'] = $data['username'];
			$_SESSION['userid'] = $data['u_id'];
			$_SESSION['characterid'] = $data['c_id'];
			echo '<script>window.open(site_url+"/tournament/", "_SELF");</script>';
			exit();
		}
		else
		{
			echo '<script>window.open(site_url+"/tournament/login.php?err=Invalid Login Data. Username or Password is incorrect", "_SELF");</script>';
			exit();
		}
}

function statelist()
{
	$state_list = array("Andra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Delhi","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telagana","Tripura","Uttaranchal","Uttar Pradesh","West Bengal");
	return $state_list;
}

function returnErrorText()
{
	if(!empty($_GET['err']))
	{
		$error = $_GET['err'];
	}
	else
	{
		$error = "";
	}
	return $error;
}

function login_form()
{
	global $site_url;
	$error = returnErrorText(); ?>
	<form action="formValidate.php" method="post">
		<div class="error_show_block">
			<span class="error"><?php echo $error; ?></span>
		</div>
		<div class="form_title_block">
			<h1 class="form_title">Login</h1>
		</div>
		<div class="image_block">
			<img class="user_img" src="<?php print($site_url);?>/tournament/images/user.png">
		</div>
		<div class="username_block">
			<label class="form_label" for="username">Username</label>
			<input class="form_text" type="text" name="username" required>
		</div>
		<div class="password_block">
			<label class="form_label" for="password">Password</label>
			<input class="form_text" type="password" name="password" required>
		</div>
		<input type="hidden" name="work" value="login">
		<div class="submit_btn">
			<input class="form_btn" type="submit" name="submit" value="Submit">
			<input class="form_btn" type="reset" name="reset" value="Clear">
		</div>
		<div class="mode_change_block">
			<a class="mode_change" href="<?php print($site_url);?>/tournament/login.php?p=signup">Not an Account!<br>SignUp Now</a>
		</div>
	</form>
	<?php
}



// functions for signup form

function signup_form()
{
	global $site_url;
	$error = returnErrorText(); ?>
	<form action="formValidate.php" method="post">
		<div class="error_show_block">
			<span class="error"><?php print($error);?></span>
		</div>
		<div class="form_title_block">
			<h1 class="form_title">Signup</h1>
		</div>
		<div class="image_block">
			<img class="user_img" src="<?php print($site_url);?>/tournament/images/user.png">
		</div>
		<div class="fname_block">
			<label class="form_label" for="fname">First Name</label>
			<input class="form_text" type="text" name="fname" placeholder="Enter First Name" required>
		</div>
		<div class="lname_block">
			<label class="form_label" for="lname">Last Name</label>
			<input class="form_text" type="text" name="lname" placeholder="Enter Last Name" required>
		</div>
		<div class="username_block">
			<label class="form_label" for="username">Username</label>
			<input class="form_text" type="text" name="username" placeholder="Choose Username" required>
		</div>
		<div class="password_block">
			<label class="form_label" for="password">Password</label>
			<input class="form_text" type="password" name="password" required>
		</div>
		<div class="repassword_block">
			<label class="form_label" for="password">Password</label>
			<input class="form_text" type="password" name="repass" placeholder="Retype Password" required>
		</div>
		<div class="email_block">
			<label class="form_label" for="email">Email Id</label>
			<input class="form_text" type="email" name="email" placeholder="xyz@example.com" required>
		</div>
		<div class="mobile_block">
			<label class="form_label" for="mobile">Mobile No</label>
			<input class="form_text" type="text" name="mobile" placeholder="9876543210" maxlength="10" required>
		</div>
		<div class="gamename_block">
			<label class="form_label" for="characterid">Ingame Name</label>
			<input class="form_text" type="text" name="u_name" placeholder="Game Username" required>
		</div>
		<div class="characterid_block">
			<label class="form_label" for="characterid">Game Character Id</label>
			<input class="form_text" type="text" name="c_id" placeholder="Player Character ID" required>
		</div>
		<div class="age_block">
			<label for="age" class="form_label">Age</label>
			<select class="age_select" name="age">
				<?php
				for($i=12;$i<=50;$i++)
				{ ?>
					<option class="age_opt" value="<?php print($i)?>"><?php print($i)?></option>
				<?php
				} ?>
			</select>
		</div>
		<div class="gender_block">
			<label class="form_label" for="gender">Gender</label>
			<input type="radio" name="gender" value="male"><span class="gender_text">Male</span>
			<input type="radio" name="gender" value="female"><span class="gender_text">Female</span>
		</div>
		<div class="state_block">
			<label for="state" class="form_label">State</label>
			<select class="state_select" name="state">
				<?php
				$state_list = statelist(); 
				foreach($state_list as $value)
				{ ?>
					<option value="<?php print($value);?>" class="state_option"><?php print($value);?></option>
					<?php
				} ?>
			</select>
		</div>
		<input type="hidden" name="work" value="signup">
		<div class="submit_btn">
			<input class="form_btn" type="submit" name="submit" value="Submit">
			<input class="form_btn" type="reset" name="reset" value="Clear">
		</div>
		<div class="mode_change_block">
			<a class="mode_change" href="<?php print($site_url);?>/tournament/login.php">Already have an Account.<br>SignIn Now</a>
		</div>
		<br><br>
		<div class="notice">
			<span class="notice_text" style="text-align: justify;">You can not change your First Name, Last Name and Game Character Id once your account will create. Please Check your details carefully before submission of your data.<br>You can contact us on : <a class="link" href="mailto:shanuraj715@gmail.com"><strong>shanuraj715@gmail.com</strong></a></span> 
		</div>
	</form>
	<?php
}

function validateSignupUsername($username)
{
	if(strlen($username)>5 or strlen($username)<32)
	{
		$username_space = strrpos($username, " ");
		if(!$username_space)
		{
			return true;
			exit();
		}
		else
		{
			echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Invalid Data. Username must not have any space. Please Remove The Space.", "_SELF");</script>';
			exit();
		}
	}
	else
	{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Username length mest me gteater than 5 characters and less than 32 Characters.", "_SELF");</script>';
		exit();
	}
}

function validateSignupPassword($password)
{
	if(strlen($password)>6 && strlen($password)<32)
	{
		return true;
	}
	else
	{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Password length mest me gteater than 8 characters and less than 32 Characters.", "_SELF");</script>';
		exit();
	}
}

function changeGenderIntoInt($gender)
{
	if($gender=="male")
	{
		$gender = 1;
	}
	elseif($_POST['gender']=="female")
	{
		$gender = 2;
	}
	return $gender;
}

function validateSignupMobile($mobile){
	if(strlen($mobile)==10){
		if(($mobile>1000000000) or ($mobile<9999999999))
		{
			return true;
		}
		else{
			echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Invalid Mobile Number","_SELF");</script>';
			exit();
		}
	}
	else{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Invalid Mobile Number","_SELF");</script>';
		exit();
	}
}

function validateSignupAge($age) {
	if($age>=12 && $age<=50) {
		return true;
	}
	else{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Age Must be greater than 12 or less than 50","_SELF");</script>';
		exit();
	}
}

function validateFname($fname){
	if(strlen($fname)>=3 && strlen($fname)<=16)
	{
		return true;
	}
	else{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=First Name Must be greater than 3 Characters or less than 16","_SELF");</script>';
		exit();
	}
}

function validateLname($lname){
	if(strlen($lname)>=3 && strlen($lname)<=16)
	{
		return true;
	}
	else{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Last Name Must be greater than 3 Characters or less than 16","_SELF");</script>';
		exit();
	}
}

function validateSignupU_name($u_name) {
	if(strlen($u_name)>4 && strlen($u_name)<14)
	{
		return true;
	}
	else{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Game User Id Must be greater than 4 Characters or less than 14","_SELF");</script>';
		exit();
	}

}

function chackForUsername($username){
	// Check username availability
	global $dbconnect;
	$sql = "SELECT `username` from users where `username`='$username'";
	$result = mysqli_query($dbconnect,$sql);
	$usernameavailable = mysqli_fetch_assoc($result);
	if($username==$usernameavailable['username'])
	{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Username Already Exist. Try Another Username","_SELF");</script>';
		exit();
	}
}

function equalPassword($password1,$password2){
	if($password1==$password2){
		return true;
	}
	else{
		echo '<script>window.open(site_url+"/tournament/login.php?p=signup&err=Password Does Not Match","_SELF");</script>';
		exit();
	}
}

function generateUserId(){
	global $dbconnect;
	global $site_url;
	do{
		$u_id = rand(10000000,99999999);
		$sql = "SELECT `u_id` from users where `u_id`='$u_id'";
		$result = mysqli_query($dbconnect,$sql);
		$available = mysqli_fetch_assoc($result);
		if($u_id==$available['u_id'])
		{
			$flag = false;
		}
		else
			$flag = true;
	} while($flag==false);
	return $u_id;
}

function signupQuery($u_id,$fname,$lname,$username,$password,$email,$mobile,$c_id,$u_name,$gender,$age,$state){
	global $dbconnect;
	global $site_url;
	$sql = "INSERT INTO `users`(`u_id`, `fname`, `lname`, `username`, `password`, `email`, `mobile`, `c_id`, `u_name`, `gender`, `age`, `state`) VALUES($u_id,'$fname','$lname','$username','$password','$email','$mobile',$c_id,'$u_name',$gender,$age,'$state')";
	if(mysqli_query($dbconnect,$sql)==true)
	{
		echo '<h1>Account Successfully Created</h1><br><h2>Redirecting You To Login Page In 5 Seconds.<br><br><a href="' . $site_url . '/tournament/login.php">Click Here </a> if you not automatically redirected';
		echo '<meta http-equiv="refresh" content="5;url=./login.php">';
	}
	else{
	    
	    echo mysqli_error($dbconnect);
	}
}




?>