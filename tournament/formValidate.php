<?php 
session_start();
require "../config.php";
require "../dbconnect.php";
require "./function/functions.php";
checkLoginOrNot();
$username = $_POST['username'];
$username = mysqli_real_escape_string($dbconnect,$username);
$password = $_POST['password'];
$password = mysqli_real_escape_string($dbconnect,$password);
if($_POST['work']=='login') {
	if(validateUsername($username)){
		if(validatePassword($password)){
			verifyLogin($username,$password);
		}
	}
}
elseif($_POST['work']=="signup"){
	validateSignupUsername($username);
	validateSignupPassword($password);
	$fname = $_POST['fname'];
	if(isset($_POST['lname']))
	{
		$lname = $_POST['lname'];
	}
	else
		$lname = "";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$c_id = $_POST['c_id'];
	$age = $_POST['age'];
	$state  = $_POST['state'];
	$u_name = $_POST['u_name'];
	// query to preventing fom sql injections
	$fname = mysqli_real_escape_string($dbconnect,$fname);
	$lname = mysqli_real_escape_string($dbconnect,$lname);
	$username = mysqli_real_escape_string($dbconnect,$username);
	$password = mysqli_real_escape_string($dbconnect,$password);
	$email = mysqli_real_escape_string($dbconnect,$email);
	$mobile = mysqli_real_escape_string($dbconnect,$mobile);
	$c_id = mysqli_real_escape_string($dbconnect,$c_id);
	validateFname($fname);
	validateSignupMobile($mobile);
	validateSignupAge($age);
	validateSignupU_name($u_name);
	equalPassword($password,$_POST['repass']);
	$gender = changeGenderIntoInt($_POST['gender']);
	chackForUsername($username);

	$u_id = generateUserId();
	signupQuery($u_id,$fname,$lname,$username,$password,$email,$mobile,$c_id,$u_name,$gender,$age,$state);
}
?>