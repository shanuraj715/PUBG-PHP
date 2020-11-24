<?php
session_start();
ob_start();
global $site_url;
global $directory;
$directory = "";

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
	$protocol = "https://";
}
else{
	$protocol = "http://";
}
$site_url = $protocol . "127.7.2.5"; //This is the site Address. If you are changing the website then change the web address here.


define('SITE_URL', $site_url);
global $site_title;
$site_title = "PUBG World"; // This is the site title

$page_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 


$page_url = str_replace('&', '%20', $page_url);
$post_count = '20'; //total post visible in one page. use only even number. if odd then page may occur error

$author_en = '1';
$date_en = '1';
$post_id_en = '1';
?>

<script>
var site_url = "127.7.2.5";
var site_title = "PUBG World";
var directory = "";
</script>