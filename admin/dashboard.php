<?php
	require("../config.php");
	require("../dbconnect.php");
	session_start();
	if((!isset($_SESSION['username'])) and (!isset($_SESSION['password'])))
	{
	    echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
	}
	else if(isset($_SESSION['username']) and isset($_SESSION['password']))
	{
		
	}

	if(!empty($_GET))
	{
		if(!empty($_GET['p']))
		{

			$page = $_GET['p'];
			$page = $page.".php";
		}
		else
		{
			$page = "dashboard-page.php";
		}
	}
	else{
		$page = "dashboard-page.php";
	}
	if(file_exists('./pages/'.$page))
	{
		$page = $page;
	}
	else
	{
		$page = '404.php';
	} ?>
	<html>
	<head>
		<title><?php echo ucfirst($_SESSION['username']); ?> - Admin Panel | <?php echo $site_title; ?></title>
		<?php require("./functions/functions.php"); ?>
		<link rel="stylesheet" href="./css/navigation.css">
		<link rel="stylesheet" href="./css/footer.css">
		<link rel="stylesheet" href="./css/main_page.css">
		<link rel="stylesheet" href="./css/notifications.css">
		<!-- site favicon icon -->
		<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
	</head>
	<body>
		<?php include("./includes/header.php");
			include("./pages/".$page);
			include("./includes/footer.php"); ?>
	</body>
	</html>