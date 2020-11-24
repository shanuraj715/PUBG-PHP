<?php
session_start();
require "../config.php";
if((isset($_SESSION['username'])) and (isset($_SESSION['userid'])))
{
	echo '<script>window.open(site_url+"/tournament", "_self");</script>';
	session_destroy();
}
?>