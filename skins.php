<?php require "./config.php";
require "./dbconnect.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>All Weapon Skins | <?php echo $site_title;?></title>

	<meta charset="UTF-8">
	<meta name="description" content="All PUBG Weapons And Item Description. Check all new Notification from PUBG Mobile">
	<meta name="keywords" content="">
	<meta name="author" content="Shanu Raj">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- linking the css file of index page -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/index.css" type="text/css" />
	<!-- linking the css file of navigation page -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/navbar.css" type="text/css">
	<!-- linking the index container css file -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/indexcontainer.css" type="text/css">
	<!-- linking the css file of footer page -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/footer.css" type="text/css">
	<!-- site favicon icon -->
	<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
	<!-- linking the js default functions -->
	<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
</head>
<body>
	<?php include './header.php';?>
	<div class="container_bg">
		<div id="content_container01" class="content_container">
			<div class="_content_heading"><!-- Weapon Category -->
				<h2 class="content_heading">All Weapon Skins</h2>
			</div>
			<hr class="hr_seperator_heading" />
			<div class="index_content">
				<?php 
					$sql = "SELECT `name`, `image`, `url` from `guns` WHERE skin = '1'";
					$result = mysqli_query($dbconnect, $sql);
					$skins = mysqli_fetch_assoc($result);
				?>
				<?php
					do{ ?>
						<div class="index_box">
							<div class="image_height">
								<a href="<?php echo $site_url;?>/skin-show.php?item=<?php echo $skins['url'];?>"><img class="box_image" src="<?php echo $site_url; ?>/images/all-images/<?php echo $skins['image'];?>"></a>
							</div>
							<h2 class="box_heading">
								<a class="category_link" href="<?php echo $site_url;?>/skin-show.php?item=<?php echo $skins['url'];?>"><?php echo $skins['name'];?></a>
							</h2>
						</div>
					<?php
					} while ($skins=mysqli_fetch_assoc($result));
				?>
				</div>
		</div>
	</div>







	<?php include "./footer.php"; ?>
</body>
</html>