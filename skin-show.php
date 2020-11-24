<?php require "./config.php";
require "./dbconnect.php";
ob_start(); ?>


<?php
$item = $_GET['item'];
$count = 1;

?>



<!DOCTYPE html>
<html>
<head>
	<title>All <?php echo strtoupper($item);?> Skins | <?php echo $site_title;?></title>

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
	<!-- linking the css file of skin page -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/skin-show.css" type="text/css">
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
				<h2 class="content_heading"><?php echo strtoupper($item);?> Skins</h2>
			</div>
			<hr class="hr_seperator_heading" />
			<div class="index_content">
				<?php 
					$sql = "SELECT `category`, `url` from `guns` WHERE `url` = '$item'";
					$result = mysqli_query($dbconnect, $sql);
					$category = mysqli_fetch_assoc($result);


					$sql = "SELECT * from `skins` WHERE `item_for` = '$item'";
					$result = mysqli_query($dbconnect, $sql);
					$skin = mysqli_fetch_assoc($result);
					if($skin['item_name']=="")
					{
						echo "<script>window.open(site_url, '_self');</script>"; 
					}
				?>
				<?php
					do{ ?>
						<div class="skin_show_block">
							<div class="skin_title_block">
								<span class="skin_title"><?php echo $count; ?> - <?php echo $skin['item_name'];?></span>
							</div>
							<div class="skin_img_block">
								<img src="<?php echo $site_url;?>/images/skins/<?php echo strtoupper($category['category']);?>/<?php echo strtoupper($category['url']);?>/<?php echo $skin['image'];?>" class="skin_img">
							</div>
						</div>
						<hr class="skin_seperate">
						<?php
						$count += 1;
						?>
					<?php
					} while ($skin=mysqli_fetch_assoc($result));
				?>
			</div>
		</div>
	</div>




	<?php include "./footer.php"; ?>
</body>
</html>