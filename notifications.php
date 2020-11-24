<html>
	<head>
		<!-- Including the config file -->
		<?php include "./config.php";
		// including the database connection file
		include "./dbconnect.php"; ?>

		<!-- sql query to get the title of the website -->
		<?php
				$sql = "select * from settings where name = 'site_title'";
				$result = mysqli_query($dbconnect, $sql);
				$data = mysqli_fetch_assoc($result);
			?>

		<title>Important Notifications | <?php echo $data['value'];?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- linking the css file of index page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/index.css" type="text/css" />
		<!-- linking the css file of navigation page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/navbar.css" type="text/css">
		<!-- linking the css file of footer page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/footer.css" type="text/css">
		<!-- linking the index container css file -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/indexcontainer.css" type="text/css">
		<!-- linking the index container css file -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/notification.css" type="text/css">
		<!-- site favicon icon -->
		<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
		<!-- linking the js default functions -->
		<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
	</head>
	<body onload="changeBackgroundImage()">
		<?php include("./header.php"); ?>
		<?php
				$sql = "SELECT * from notifications order by id limit 80";
				$result = mysqli_query($dbconnect, $sql);
				$notifications = mysqli_fetch_assoc($result);
		?>
		<div class="container_bg">
			<div id="content_container01" class="content_container">
				<div class="_content_heading"><!-- Weapon Category -->
					<h2 class="content_heading">Notifications</h2>
				</div>
				<hr class="hr_seperator_heading" />
				<div class="index_content">  
					<ol class="notification_order_list">
					<?php
						do{ ?>
							<li class="notification_text">
							<?php
							if($notifications['link']=='0')
							{
								echo $notifications['value'];?></li>
								<?php
							}
							else if($notifications['link']=='1')
							{
								echo $notifications['value'];?> <a title="<?php echo $notifications['value'];?> || Click Here To View More" class="notification_link_text" href="<?php echo $site_url;?>/blog/posts.php?id=<?php echo $notifications['url'];?>">Visit Link</a></li><?php
							} 
							else if($notifications['link']=='2')
							{
								echo $notifications['value'];?> <a title="<?php echo $notifications['value'];?> || Click Here To View More" class="notification_link_text" href="<?php echo $notifications['url'];?>">Visit&nbsp;Link</a></li><?php
							} 
						} while($notifications=mysqli_fetch_assoc($result));
					?>
					</ol>
				</div>
				<div class="homepage_btn">
					<a class="homepage_btn" href="<?php echo $site_url;?>" title="Home">Go To Homepage</a>
				</div>
			</div>
		</div>
		<?php include "./footer.php";?>
	</body>
</html>