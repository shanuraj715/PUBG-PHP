<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
<?php
	$sql = "select * from navigation_menu where `p_id`='0' order by btn_order asc";
	$result = mysqli_query($dbconnect, $sql);
	$header_data = mysqli_fetch_assoc($result);
?>
<div class="header_image">
	<img class="header_img" src="<?php echo $site_url;?>/images/header_img.png" />
	<img class="header_img2" src="<?php echo $site_url;?>/images/logo.png" />
	<img class="header_img2 rotate_image" src="<?php echo $site_url;?>/images/header_image2.png" />
</div>
<div class="nav_btn_res">
	<img class="nav_res" src="<?php echo $site_url;?>/images/menu.png" onclick="navbar_visible()">
</div>
<div class="navbar_area" id="navbar_vis">
	<a class="nav_link navbar_home" href="<?php echo $site_url;?>" title="Homepage">Home</a>
	<?php
	do{ ?>
		<a class="nav_link navbar_btn" href="<?php echo $site_url;?>/<?php echo $header_data['link'];?>" title="<?php echo $header_data['description'];?>"><?php echo $header_data['name'];?></a>
	<?php
			} while ($header_data=mysqli_fetch_assoc($result));
?>
  	<a class="nav_link navbar_admin" href="<?php echo $site_url; ?>/admin/login.php" title="Admin Access Only">Admin</a>
</div>
