<?php require("../config.php");
require("../dbconnect.php"); ?>

<?php
session_start();
if(isset($_SESSION['username']) and isset($_SESSION['password']))
{
	session_destroy();
	echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
} 
else if((!isset($_SESSION['username'])) and (!isset($_SESSION['password'])))
{
	echo "<script>window.open(site_url+'admin/login.php','_self');</script>";
} 
else
{
	echo "<script>window.open(site_url+'admin/login.php','_self');</script>";
}
?>