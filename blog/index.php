<?php require "../config.php";
require "../dbconnect.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/css/index.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/blog/css/blog_index.css">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- site favicon icon -->
	<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
	<!-- linking the js default functions -->
	<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
	<title>Blog | <?php echo $site_title;?></title>
</head>
<body>
	<script>
 		AOS.init({
 			duration : 1200,
 		});
	</script>
	<?php include "../header.php";?>
	<?php
		$sql = "SELECT id,post_id,post_title,post_desc,post_image,post_date,author from post";
		$result = mysqli_query($dbconnect, $sql);
		$posts = mysqli_fetch_assoc($result);
		
	?>
	<div class="blog_background">
		<div class="post_area">

		<?php
		do
		{ ?>
			<div data-aos="fade-up" class="post_block"> <!-- Post Block for every post -->
				<?php if($posts['post_image']!="")
				{ ?>
					<div class="post_image_block">
						<a href="<?php echo $site_url;?>/blog/posts.php?id=<?php echo $posts['post_id'];?>&title=<?php echo str_replace(' ', '-', $posts["post_title"]);?>" title="<?php echo $posts['post_title'];?>">
							<img class="post_image" src="<?php echo $site_url;?>/blog/images/post_images/<?php echo $posts['post_image'];?>" />
						</a>
					</div>
				<?php }
				else
				{ ?>
					<div class="post_image_block">
						<img class="post_image" src="<?php echo $site_url;?>/blog/images/post_images/default.png" />
					</div>
				<?php } ?>
				<div class="post_title_desc_block">
					<a href="<?php echo $site_url;?>/blog/posts.php?id=<?php echo $posts['post_id'];?>&title=<?php echo str_replace(' ', '-', $posts["post_title"]);?>" title="<?php echo $posts['post_title'];?>">
						<p class="index_post_title"><?php echo $posts['post_title'];?></p>
					</a>
					<p class="index_post_desc"><?php echo $posts['post_desc'];?></p>
				</div>
			</div>
			<?php
		}while($posts=mysqli_fetch_assoc($result)) ?>
		</div>
	</div>
	<?php include "../footer.php"; ?>
</body>
</html>