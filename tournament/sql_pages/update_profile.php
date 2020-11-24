<?php
session_start();
ob_start();
require("../../config.php");
require("../../dbconnect.php");

$userid = $_SESSION['userid'];
$characterid = $_SESSION['characterid'];
$username_session = $_SESSION['username'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$ingameusername = $_POST['u_name'];
$gender = $_POST['gender'];


$username = mysqli_real_escape_string($dbconnect,$username);
$password = mysqli_real_escape_string($dbconnect,$password);
$email = mysqli_real_escape_string($dbconnect,$email);
$mobile = mysqli_real_escape_string($dbconnect,$mobile);

if(!empty($_POST['gender']))
{
	if($gender=="male")
	{
		$gender = 1;
	}
	elseif($gender=="female")
	{
		$gender= 2;
	}
}
$age = $_POST['age'];
$state = $_POST['state'];

if(($username=="") or ($password=="") or ($email=="") or ($mobile=="") or ($ingameusername=="") or ($age=="") or ($state=="")) 
{
	echo '<script>window.open(site_url+"/tournament/dashboard.php","_SELF");</script>';
	exit();
}



if($username!=$username_session)
{
	$sql="SELECT `username` from users where `username`='$username'";
	$result = mysqli_query($dbconnect,$sql);
	$totalusers = mysqli_fetch_assoc($result);
	if(($totalusers['username']!=NULL) and ($totalusers['username']==$username))
	{
		header("Location: ".$site_url."/tournament/dashboard.php?u_id=".$userid."&c_id=".$characterid."&user=exist&n=profile");
		exit();
	}
}

$sql = "UPDATE users SET username='$username', password='$password', email='$email', mobile='$mobile', u_name='$ingameusername', gender='$gender', age='$age', state='$state' WHERE `u_id` = '$userid'";
if(mysqli_query($dbconnect,$sql)==true)
{
	session_destroy();
	echo '<h1>Account Updated</h1><br><h2>Redirecting You To Login Page In 5 Seconds.<br><br><a href="' . $site_url . '/tournament/login.php">Click Here </a> if you not automatically redirected';
	echo '<meta http-equiv="refresh" content="5;url=../login.php">';
}
?>