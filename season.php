<?php require "./config.php";
require "./dbconnect.php";?>

<!DOCTYPE html>
<html>
<head>
	<title>Season 6 | <?php echo $site_title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- linking the css file of season page -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/season.css" type="text/css">
	<!-- site favicon icon -->
	<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
	<!-- linking the js default functions -->
	<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
</head>
<body onload="setSeasonPageBackground()">
	<script>
  		AOS.init({
  			duration : 1200,
  		});
	</script>
	<div class="home_btn_block">
		<span class="home_btn">
			<a class="home_btn_link" title="Go To Home Page | <?php echo $site_title;?>" href="<?php echo $site_url;?>">HOME</a>
		</span>
	</div>
	<div id="rp_background">
	</div>
	<div class="rpbackground">
		<div class="welcome">
			<span class="rp_welcome_text">Welcome To</span>
		</div>
		<div class="rp_title">
			<span class="rp_text rp_text_anim">R</span>
			<span class="rp_text rp_text_anim">o</span>
			<span class="rp_text rp_text_anim">y</span>
			<span class="rp_text rp_text_anim">a</span>
			<span class="rp_text rp_text_anim">l</span>
			<span class="rp_text rp_text_anim">e</span>
			<span class="rp_text rp_text_anim">&nbsp;</span>
			<span class="rp_text rp_text_anim">P</span>
			<span class="rp_text rp_text_anim">a</span>
			<span class="rp_text rp_text_anim">s</span>
			<span class="rp_text rp_text_anim">s</span>
			<span class="rp_text rp_text_anim">&nbsp;</span>
			<span class="rp_text rp_text_anim">S</span>
			<span class="rp_text rp_text_anim">e</span>
			<span class="rp_text rp_text_anim">a</span>
			<span class="rp_text rp_text_anim">s</span>
			<span class="rp_text rp_text_anim">o</span>
			<span class="rp_text rp_text_anim">n</span>
			<span class="rp_text rp_text_anim">&nbsp;</span>
			<span class="rp_text rp_text_anim">6</span>
		</div>
		<?php
		$sql = "SELECT * FROM `royal-pass` WHERE id = '1'";
		$result = mysqli_query($dbconnect,$sql);
		$rpass = mysqli_fetch_assoc($result);
		?>
		<div class="rp_image_block">
			<img class="rp_img" src="./images/royalpass/<?php echo $rpass['rp_logo'];?>">
		</div>
		<div data-aos="fade-up-left" data-aos-delay="3000" class="season_info_block">
			<span class="price_text">Purchase Elite Pass In </span><img class="rp_uc_logo" src="<?php echo $site_url;?>/images/royalpass/uc.png"><span class="price">600 UC</span>
		</div>
	</div>
	<div class="imp_block">
		<?php
		$sql = "SELECT DISTINCT * FROM `royal-pass` WHERE non_elite_imp = '1'";
		$result = mysqli_query($dbconnect,$sql);
		$nei = mysqli_fetch_assoc($result);
		?>
		<div class="non_elite_imp">
			<p data-aos="zoom-in-up" class="rp_text_imp">Special Items For Non Elite Members</p>
			<?php
			do{ ?>
				<div class="rp_imp_box" data-aos="flip-up">
					<div class="imp_display_block">
						<?php
						if($nei['image']==NULL)
						{
							$nei['image']="blank.png";
						} ?>
						<div class="imp_img_block">
							<img class="imp_image" src="<?php echo $site_url;?>/images/royalpass/<?php echo $nei['image'];?>">
						</div>
						<div class="imp_title_block">
							<span class="imp_title"><?php echo $nei['title'];?></span>
						</div>
					</div>
				</div>
			<?php
			} while($nei=mysqli_fetch_assoc($result));
			 ?>
		</div>
		<?php
		$sql = "SELECT DISTINCT * FROM `royal-pass` WHERE elite_imp = '1'";
		$result = mysqli_query($dbconnect,$sql);
		$elite_imp = mysqli_fetch_assoc($result);
		?>
		<div class="elite_imp">
			<p data-aos="zoom-in-up" class="rp_text_imp">Special Items For Elite Members</p>
			<?php
			do{ ?>
				<div class="rp_imp_box" data-aos="flip-up">
					<div class="imp_display_block">
						<?php
						if($elite_imp['eimage']==NULL)
						{
							$elite_imp['eimage']="blank.png";
						} ?>
						<div class="imp_img_block">
							<img class="imp_image" src="<?php echo $site_url;?>/images/royalpass/<?php echo $elite_imp['eimage'];?>">
						</div>
						<div class="imp_title_block">
							<span class="imp_title"><?php echo $elite_imp['etitle'];?></span>
						</div>
					</div>
				</div>
			<?php
			} while($elite_imp=mysqli_fetch_assoc($result));
			 ?>
		</div>
	</div>
	<div class="item_heading_block" data-aos="fade-left" data-aos-duration="500">
		<p class="rp_item_heading">Items In This Season</p>
	</div>
	<div class="items_block">
		<?php
			$sql = "SELECT `level`, `title`, `image`, `etitle`, `eimage`, `e2title`, `e2image` FROM `royal-pass` WHERE level >= 1";
			$result = mysqli_query($dbconnect,$sql);
			$items = mysqli_fetch_assoc($result);
		?>
		<div class="items_subblock">
			<?php 
			do{ ?>
				<div data-aos="flip-right" class="items">
					<div data-aos="fade-down" data-aos-duration="1700" class="level_block">
						<span class="level"><?php echo $items['level']; ?></span>
					</div>
					<?php
					if(($items['image'])==NULL)
					{
						$items['image']="blank.png";
						$items['title']="Empty";
					} ?>
					<div data-aos="flip-up" data-aos-duration="1700" class="non-e">
						<div data-aos="zoom-in" data-aos-duration="1700" class="item_image_block">
							<img class="item_image" src="<?php echo $site_url;?>/images/royalpass/<?php echo $items['image']; ?>">
						</div>
						<div data-aos="flip-up" data-aos-duration="1700" class="item_title_block">
							<span class="item_title"><?php echo $items['title'];?></span>
						</div>
					</div>
					<div class="elite">
						<div data-aos="zoom-in" data-aos-duration="1700" class="item_image_block">
							<img class="item_image" src="<?php echo $site_url;?>/images/royalpass/<?php echo $items['eimage']; ?>">
						</div>
						<div data-aos="flip-up" data-aos-duration="1700" class="item_title_block" id="elite-text-color">
							<span class="item_title"><?php echo $items['etitle'];?></span>
						</div>
						<?php
						if($items['e2title']!="")
						{ ?>
							<div data-aos="zoom-in" data-aos-duration="1700" class="item_image_block">
							<img class="item_image" src="<?php echo $site_url;?>/images/royalpass/<?php echo $items['e2image']; ?>">
							</div>
							<div data-aos="flip-up" data-aos-duration="1700" class="item_title_block" id="elite-text-color">
								<span class="item_title"><?php echo $items['e2title'];?></span>
							</div>
						<?php 
						} ?>
					</div>
				</div>

			<?php 
			}while ($items=mysqli_fetch_assoc($result)); ?>
		</div>
	</div>
</body>
</html>