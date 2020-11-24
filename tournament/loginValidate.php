<?php
session_start();
require "../config.php";
require "../dbconnect.php";

if(empty($_POST['username']))
{
	echo '<script>window.open(site_url+"/tournament/login.php?res=error", "_SELF");</script>';
}
else if(empty($_POST['password']))
{
	echo '<script>window.open(site_url+"/tournament/login.php?res=error", "_SELF");</script>';
}
else if((!empty($_POST['username'])) and (!empty($_POST['password'])))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
}

$sql = "SELECT * from users where `username` = '$username' and `password` = '$password'";
$result = mysqli_query($dbconnect, $sql);
$data = mysqli_fetch_assoc($result);

if(($username==$data['username']) and $password==$data['password'])
{
	$_SESSION['username'] = $data['username'];
	$_SESSION['userid'] = $data['u_id'];
	$_SESSION['characterid'] = $data['c_id'];
	echo '<script>window.open(site_url+"/tournament/", "_SELF");</script>';
}
else
{
	echo '<script>window.open(site_url+"/tournament/login.php?res=invalid", "_SELF");</script>';
}


?>