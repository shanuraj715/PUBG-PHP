<?php include("./config.php"); ?> <!-- Include The Configuration File -->
<!-- Include Database Connection File -->
<?php include('./dbconnect.php'); ?> 
<!DOCTYPE html>
<html>
	<head>
		
		<!-- check the url $get values... If no value is available then go to home page -->
		<?php 
			if(empty($_GET))
			{
				// if no $get variables then homepage
				$page = "index";
			}
			else if(empty($_GET['p']))
			{
				// if no $get values then homepage
				$page = "index";
			}
			else
			{
				// if $get value is available then set $page variable the value
				// if $get has a var p and storesvalue then store in $page
				$page = $_GET['p'];
			}
		?>
		<!-- checks for the category type. like a pistol or sniper -->
		<?php 
		// checks if the asset value is empty. if then default page is of Assault Rifel
			if(empty($_GET['asset']))
			{
				// if asset value is empty then default page is of AR gun
				$asset = "ar";
				$title = "PlayerUnknown's Battlegrounds";
			}
			else
			{
				// if asset value is not empty then set the value to the var
				$asset = $_GET['asset'];
				$title = $asset;
			}


			if(empty($_GET['type']))
			{
				$type = "weapon";

			}
			else
			{
				$type = $_GET['type'];
				if($type=='weapon')
				{
					$t='w';
				}
				else if($type=='asset')
				{
					$t='a';
				}
			}
		?>	
		<!-- starting sql query for site title -->
		<?php
			$sql = "select * from settings where name = 'site_title'";
			$result = mysqli_query($dbconnect, $sql);
			$data = mysqli_fetch_assoc($result);
		?>
		<!-- SEO Meta -->
		<meta charset="UTF-8">
		<meta name="description" content="All PUBG Weapons And Item Description. Check all new Notification from PUBG Mobile">
		<meta name="keywords" content="">
		<meta name="author" content="Shanu Raj">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Closing SEO Meta Tags -->

		<title><?php echo ucfirst($title);?> || <?php echo $data['value']; ?></title>
		<!-- linking the css file of index page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/index.css" type="text/css" />
		<!-- linking the css file of navigation page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/navbar.css" type="text/css">
		<!-- linking the css file of footer page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/footer.css" type="text/css">
		<!-- linking the index container css file -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/indexcontainer.css" type="text/css">
		<!-- site favicon icon -->
		<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
		<!-- linking the js default functions -->
		<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
	</head>
	<body onload="changeBackgroundImage()">
		<!-- including the header page -->
		<?php 
			include ("./header.php"); ?>
		<?php 
		// checks for index
		if($page=='index')
		{
			// main index page starts here
			// sql query for index page
			// this will get all the gun category list
			$sql = "select * from `gun-category` order by btn_order";
			$result = mysqli_query($dbconnect, $sql);
			$links = mysqli_fetch_assoc($result);
		?>
		<!-- index page main div starts here -->
		<div class="container_bg">
			<div id="content_container01" class="content_container">
				<div class="_content_heading"><!-- Weapon Category -->
					<h2 class="content_heading">Weapon categories</h2>
				</div>
				<hr class="hr_seperator_heading" />
				<div class="index_content">  
					<?php
						do{ ?>
							<div class="index_box">
								<div class="image_height">
									<a href="<?php echo $site_url;?>/?p=category&asset=<?php echo $links['url'];?>&type=weapon" title="<?php echo $links['description'];?>"><img class="box_image" src="<?php echo $site_url; ?>/images/gun-category/<?php echo $links['image'];?>"></a>
								</div>
								<h2 class="box_heading">
									<a class="category_link" href="<?php echo $site_url;?>/?p=category&asset=<?php echo $links['url'];?>&type=weapon" title="<?php echo $links['description'];?>"><?php echo $links['title'];?>
									</a>
								</h2>
							</div>
						<?php
						} while ($links=mysqli_fetch_assoc($result));
					?>
				</div>
				<!-- sql query for other assets on index page -->
				<?php
					$sql = "select * from `other-assets` order by btn_order";
					$result = mysqli_query($dbconnect, $sql);
					$links = mysqli_fetch_assoc($result);
					if($links['id']=="")
					{
						Header('Location: '.$site_url);
					}
				?>
				<!-- Other Assets Block -->
				<div class="_content_heading">
					<h2 class="content_heading">Other Assets</h2>
				</div>
				<hr class="hr_seperator_heading" />
				<div class="index_content">  
					<?php
						do{ ?>
							<div class="index_box">
								<div class="image_height">
									<a href="<?php echo $site_url;?>/?p=category&asset=<?php echo $links['url'];?>&type=asset" title="<?php echo $links['description'];?>">
										<img class="box_image" src="<?php echo $site_url; ?>/images/assets-images/<?php echo $links['image'];?>">
									</a>
								</div>
								<h2 class="box_heading"><a class="category_link" href="<?php echo $site_url;?>/?p=category&asset=<?php echo $links['url'];?>&type=asset" title="<?php echo $links['description'];?>"><?php echo $links['title'];?></a>
								</h2>
							</div>
						<?php
						} while ($links=mysqli_fetch_assoc($result));
					?>
				</div>

				<!-- sql query for Maps on index page -->
				<?php
					$sql = "select * from `maps` order by btn_order";
					$result = mysqli_query($dbconnect, $sql);
					$links = mysqli_fetch_assoc($result);
					if($links['id']=="")
					{
						Header('Location: '.$site_url);
					}
				?>
				<!-- Maps Block -->
				<div class="_content_heading">
					<h2 class="content_heading">Maps</h2>
				</div>
				<hr class="hr_seperator_heading" />
				<div class="index_content">  
					<?php
						do{ ?>
							<div class="index_box">
								<div class="image_height">
									<!-- <a href="<?php echo $site_url;?>/?p=category&asset=<?php echo $links['url'];?>&type=asset" title="<?php echo $links['description'];?>"> -->
										<img class="box_image" src="<?php echo $site_url; ?>/images/map/<?php echo $links['image'];?>">
									</a>
								</div>
								<h2 class="box_heading"><a class="category_link"><?php echo $links['title'];?></a>
								</h2>
							</div>
						<?php
						} while ($links=mysqli_fetch_assoc($result));
					?>
				</div>
			</div>
		</div>
			<!-- Category page starts here -->
			<?php
			// closing the if statement
		}
		else if($page=='category')
		{
			if($type=='weapon')
			{
				$sql = "SELECT * FROM `guns` where `category` = '$asset' ORDER BY `id` ASC";
				$result = mysqli_query($dbconnect, $sql);
				$links = mysqli_fetch_assoc($result);
			}
			else if($type=='asset')
			{
				$sql = "SELECT * from `all-assets` where `category` = '$asset'";
				$result = mysqli_query($dbconnect, $sql);
				$links = mysqli_fetch_assoc($result);
			}
			if($links['id']=="")
			{
				Header('Location: '.$site_url);
			}
			?>
			<div class="container_bg">
				<div id="content_container01" class="content_container">
					<div class="_content_heading"><!-- Weapon Category -->
						<h2 class="content_heading"><?php echo $asset;?></h2>
					</div>
					<hr class="hr_seperator_heading" />
					<div class="index_content">  
						<?php
							do{ ?>
								<div class="index_box">
									<div class="image_height">
										<a href="<?php echo $site_url;?>/view.php?a=<?php echo $links['url'];?>&c=<?php echo $t;?>">
											<img class="box_image" src="<?php echo $site_url; ?>/images/all-images/<?php echo $links['image'];?>">
										</a>
									</div>
									<h2 class="box_heading">
										<a class="category_link" href="<?php echo $site_url;?>/view.php?a=<?php echo $links['url'];?>&c=<?php echo $t;?>" title="<?php echo $links['short-description'];?>"><?php echo $links['name'];?>
										</a>
									</h2>
								</div>
							<?php
							} while ($links=mysqli_fetch_assoc($result));
						?>
					</div> 
				</div>
			</div>
		<?php 
		// closing the if statement
		} 
		else
		{
			include("./404.php");
		}
		?>
		
		<?php include "./footer.php" ; ?>
	</body>
</html>
