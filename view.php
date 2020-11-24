<!DOCTYPE html>
<html>
	<head>
		<?php include "./config.php"; ?> <!-- Include The Configuration File -->
		<!-- Include Database Connection File -->
		<?php include('./dbconnect.php'); ?> 
		<?php 
			if(empty($_GET))
			{
				// if no $get variables then homepage
				$cat = "NULL";
				$asset = "NULL";
			}
			else if(empty($_GET['a']))
			{
				// if no $get values then homepage
				$cat = "NULL";
				$asset = "NULL";
			}
			else if(empty($_GET['c']))
			{
				// if no $get values then homepage
				$cat = "NULL";
				$asset = "NULL";
			}
			else
			{
				// if $get value is available then set $page variable the value
				// if $get has a var p and storesvalue then store in $page
				$cat = $_GET['c'];
				$asset = $_GET['a'];
			}
			if($cat=="NULL" or $asset=="NULL")
			{
				header('Location: '.$site_url);
			}
			else
			{
				if($cat=='w')
				{
					$table = "guns";
				}
				else if($cat=='a')
				{
					$table = 'all-assets';
				}
				else
				{
					header('location:'.$site_url);
				}
			} 
		?>
		<?php
			$sql = "SELECT * FROM `$table` where `url` = '$asset'";
			$result = mysqli_query($dbconnect, $sql);
			$data = mysqli_fetch_assoc($result); ?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- linking the css file of index page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/index.css" type="text/css" />
		<!-- linking the css file of navigation page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/navbar.css" type="text/css">
		<!-- linking the css file of footer page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/footer.css" type="text/css">
		<!-- linking the index container css file -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/indexcontainer.css" type="text/css">
		<!-- linking the view page css file -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/view.css" type="text/css">
		<!-- site favicon icon -->
		<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
		<!-- linking the js default functions -->
		<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
		<title><?php echo $data['name'];?> - <?php echo ucfirst($data['category']);?> || <?php echo $site_title;?></title>
	</head>
	<body onload="changeBackgroundImage()">
		<?php include("./header.php");?>
		<div class="container_bg">
			<div id="content_container01" class="content_container">
				<div class="_content_heading"><!-- Weapon Category -->
					<h2 class="content_heading"><?php echo $data['name']; echo " - "; echo $data['category'];?></h2>
				</div>
				<hr class="hr_seperator_heading" />
				<div class="short_description_area">
					<h2 class="short_desc"><?php echo $data['short-description'];?></h2>
				</div>
				<div class="index_content">  
					<?php
					if ($data=="")
					{
						header('location:'.$site_url); // goto homepage if there is no row in the database
					}
					else
					{
						if($table=='guns') // for gun
						{ ?>
							<div class="content_text_area background">
								<div class="content_image_area">
									<img class="content_image_view" src="<?php echo $site_url;?>/images/all-images/<?php echo $data['image'];?>">
								</div>
								<div class="text_area">
									<p class="text">
										<?php echo $data['long-description'];?>
									</p>
									<?php
									if($data['skin']=='1')
										{ ?>
										<div class="skin_btn_block">
											<a class="skin_btn" href="<?php echo $site_url;?>/skin-show.php?item=<?php echo $data['url'];?>">View Skins</a>
										</div>
										<?php
									}?>
								</div>
							</div>
							<div class="more_info">
								<div class="info_box">
									<!-- 1 -->
									<div class="title_box">
										<p class="title">Weapon Name : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['name']; echo ' - '; echo $data['full-name'];?></p>
									</div>
								</div>
								<?php
								if(($data['category'])!="")
								{ ?>
									<div class="info_box">
										<!-- 2 -->
										<div class="title_box">
											<p class="title">Category : </p>
										</div>
										<div class="detail_box">
											<p class="details"><?php echo strtoupper($data['category']);?></p>
										</div>
									</div>
								<?php } ?>
								<?php if(($data['bullet-type'])!="")
								{ ?>
								<div class="info_box">
									<!-- 3 -->
									<div class="title_box">
										<p class="title">Bullet Type : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['bullet-type'];?></p>
									</div>
								</div>
								<?php } ?>
								<?php if(($data['max-range'])!="")
								{ ?>
								<div class="info_box">
									<!-- 4 -->
									<div class="title_box">
										<p class="title">Max Range : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['max-range'];?></p>
									</div>
								</div>
								<?php } ?>
								<?php if(($data['sight'])!="")
								{?>
								<div class="info_box">
									<!-- 5 -->
									<div class="title_box">
										<p class="title">Sight : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo str_replace(',', ', ', $data['sight']) ;?></p>
									</div>
								</div>
								<?php } ?>
								<?php if(($data['magzine'])!="")
								{?>
								<div class="info_box">
									<!-- 6 -->
									<div class="title_box">
										<p class="title">Magzines : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo str_replace(',', '<br />', $data['magzine']);?></p>
									</div>
								</div>
								<?php } ?>
								<?php if(($data['foregrip'])!="")
								{?>
								<div class="info_box">
									<!-- 7 -->
									<div class="title_box">
										<p class="title">Foregrip : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo str_replace(',', '<br />', $data['foregrip']);?></p>
									</div>
								</div>
								<?php } ?>
								<?php if(($data['stock'])!="")
								{?>
								<div class="info_box">
									<!-- 8 -->
									<div class="title_box">
										<p class="title">Stock : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['stock'];?></p>
									</div>
								</div>
								<?php } ?>
								<?php if(($data['bwom'])!="")
								{?>
								<div class="info_box">
									<!-- 9 -->
									<div class="title_box">
										<p class="title">Without Ext. Mag. : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['bwom'];?> Bullets</p>
									</div>
								</div>
								<?php } ?>
								<?php if(($data['bwm'])!="")
								{?>
								<div class="info_box">
									<!-- 10 -->
									<div class="title_box">
										<p class="title">With Ext. Mag. : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['bwm'];?> Bullets</p>
									</div>
									<!-- 11 -->
								</div>
								<?php } ?>
								<?php if(($data['fire-modes'])!="")
								{?>
								<div class="info_box">
									<div class="title_box">
										<p class="title">Fire Modes : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['fire-modes'];?></p>
									</div>
									<!-- 12 -->
								</div>
								<?php } ?>
								<?php if(($data['fire_rate'])!="")
								{ ?>
								<div class="info_box">
									<div class="title_box">
										<p class="title">Fire Rate : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['fire_rate'];?></p>
									</div>
								</div>
								<?php } ?>
							</div> <!-- Closing the more info div tag -->
							<?php
						}
						else if($table=='all-assets') // for all assets
						{ ?>
							<div class="content_text_area background">
								<div class="content_image_area">
									<img class="content_image_view" src="<?php echo $site_url;?>/images/all-images/<?php echo $data['image'];?>">
								</div>
								<div class="text_area">
									<p class="text">
										<?php echo $data['long-description'];?>
									</p>
									<?php
									if($data['skin']=='1')
										{ ?>
										<div class="skin_btn_block">
											<a class="skin_btn" href="<?php echo $site_url;?>/skin-show.php?item=<?php echo $data['url'];?>">View Skins</a>
										</div>
										<?php
									}?>
								</div>
							</div>
							<div class="more_info">
								<?php if(($data['name'])!="")
								{?>
								<div class="info_box">
									<!-- 1 -->
									<div class="title_box">
										<p class="title">Item Name : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['name'];?></p>
									</div>
								</div>
							<?php }
							if(($data['category'])!="")
								{?>
								<div class="info_box">
									<!-- 2 -->
									<div class="title_box">
										<p class="title">Category : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['category'];?></p>
									</div>
								</div>
							<?php }
							if(($data['attach-on'])!="")
								{?>
								<div class="info_box">
									<!-- 3 -->
									<div class="title_box">
										<p class="title">Attach On : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo $data['attach-on'];?></p>
									</div>
								</div>
							<?php }
							if(($data['use-on'])!="")
								{?>
								<div class="info_box">
									<!-- 4 -->
									<div class="title_box">
										<p class="title">Used On : </p>
									</div>
									<div class="detail_box">
										<p class="details"><?php echo str_replace(',', '<br />', $data['use-on']);?></p>
									</div>
								</div>
							<?php } ?>
							</div>
						<?php
						}
					}
					?>
					<div class="error_feedback">
						<div class="share_block">
							<p class="share_text">Share On </p>
							<!-- whatsapp sharing -->
							<a class="share_link" title="Share This Post On Whatsapp" href="whatsapp://send?text=<?php echo str_replace('%20', '&', $page_url);?>"><img class="share_img" src="./images/share/wa.png"></a>
							<!-- facebook sharing -->
							<a class="share_link" title="Share This Page On Facebook" href="http://www.facebook.com/sharer.php?u=<?php echo str_replace('%20', '&', $page_url);?>" target="_blank"><img class="share_img" src="./images/share/fb.png"></a>
							<!-- twitter sharing -->
							<a class="share_link" title="Share This Page On Twitter" href="http://twitter.com/share?text=<?php echo $data['name']; echo "-"; echo $data['category'];?>%20-%20PUBG Mobile&url=<?php echo str_replace('%20', '&', $page_url);?>"><img class="share_img" src="./images/share/tw.png"></a>
							<!-- email sharing -->
							<a class="share_link" title="Share This Page Through Email" href="mailto:?subject=<?php echo $data['name']; echo "-"; echo $data['category'];?>%20-%20PUBG Mobile&url=http://www.google.com"><img class="share_img" src="./images/share/gmail.png"></a>
						</div>
							<a id="error_text_view" href="<?php echo $site_url;?>/other/form.php?type=error&p=<?php echo $page_url;?>">Report Error</a><a id="error_text_view" href="<?php echo $site_url;?>/other/form.php?type=feedback">Send Your Feedback | </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("./footer.php");?>
	</body>
</html>