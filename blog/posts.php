<?php require "../config.php";
require "../dbconnect.php";

if(empty($_GET))
{
	echo "<script>window.open(site_url+'/blog','_self');</script>";
}
else if(!empty($_GET))
{
	if(empty($_GET['id']))
	{
		echo "<script>window.open(site_url+'/blog','_self');</script>";
	}
	else if(!empty($_GET['id']))
	{
		if(is_numeric($_GET['id']) and ($_GET['id'])>='1')
		{
			$post_id = $_GET['id'];
			$sql = "SELECT * from post WHERE post_id = $post_id";
			$result = mysqli_query($dbconnect, $sql);
			$post_data = mysqli_fetch_assoc($result);
			if($post_data['id']=="")
			{
				$page_refer = '404';
				$post_data['post_title'] = 'Not Found';
			}
			else
			{
				$page_refer = 'page';
			}
		}
		else
		{
			// echo "<script>window.open(site_url+'/blog','_self');</script>";
			$page_refer = '404';
			$post_data['post_title'] = 'Not Found';
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/css/index.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/blog/css/share.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/blog/css/blog_post.css">
	<!-- site favicon icon -->
	<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
	<!-- linking the js default functions -->
	<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
	<title><?php echo $post_data['post_title'];?> | <?php echo $site_title;?></title>
</head>
<body>
	<?php include "../header.php"; ?>
	
	<div class="blog_background">
		<?php if($page_refer!='404')
		{ ?>
			<div class="post_heading">
				<h1 class="post_title"><?php echo $post_data['post_title'];?></h1>
			</div>
			<div class="post_meta">
				<?php if($author_en=='1')
				{ ?>
					<p class="post_meta_author meta_seperator">Author : <?php echo $post_data['author'];?></p>
				<?php
				} ?> / 
				<?php if($date_en=='1')
				{ ?>
					<p class="post_meta_date meta_seperator">Date : <?php echo $post_data['post_date'];?></p>
				<?php
				} ?> / 
				<?php if($post_id_en=='1')
				{ ?>
					<p class="post_meta_post_id meta_seperator">Post ID : <?php echo $post_data['post_id'];?></p>
				<?php
				} ?>
			</div>
			<?php if($post_data['post_image']!="")
			{ ?>
			<div class="post_page_image_block">
				<img class="post_page_image" src="<?php echo $site_url;?>/blog/images/post_images/<?php echo $post_data['post_image'];?>">
			</div>
			<?php 
			} ?>
			<div class="post_container">
				<?php echo $post_data['post_data'];?>
			</div>
			<?php
		}
		else if($page_refer=='404')
		{ 
			include "./404.php";
		} ?>
		<div class="share_block">
			<!-- whatsapp sharing -->
			<div class="share_img_block">
				<a class="share_link" title="Share This Post On Whatsapp" href="whatsapp://send?text=<?php echo $post_data['post_title'];?> | PUBG Mobile%0A %0A<?php echo str_replace('%20', '&', $page_url);?>"><img class="share_img" src="../images/share/wa.png"></a>
				<!-- facebook sharing -->
				<a class="share_link" title="Share This Page On Facebook" href="http://www.facebook.com/sharer.php?u=<?php echo str_replace('%20', '&', $page_url);?>" target="_blank"><img class="share_img" src="../images/share/fb.png"></a>
				<!-- twitter sharing -->
				<a class="share_link" title="Share This Page On Twitter" href="http://twitter.com/share?text=<?php echo $post_data['post_title'];?>%20-%20PUBG Mobile&url=<?php echo str_replace('%20', '&', $page_url);?>"><img class="share_img" src="../images/share/tw.png"></a>
				<!-- email sharing -->
				<a class="share_link" title="Share This Page Through Email" href="mailto:?subject=<?php echo $post_data['post_title'];?>%20-%20PUBG Mobile&url=http://www.google.com"><img class="share_img" src="../images/share/gmail.png"></a>
			</div>
		</div>
	</div>
	<?php include "../footer.php"; ?>
</body>
</html>