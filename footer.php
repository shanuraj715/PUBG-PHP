
<?php
	$sql = "select * from notifications order by list_order limit 4";
	$result = mysqli_query($dbconnect, $sql);
	$links = mysqli_fetch_assoc($result);
?>
<!-- main footer area full width -->
<div class="footer_area">
	<!-- left side of footer area -->
	<div class="footer1">
		<p class="footer_notification_header1">Important Notifications</p>
		<div class="footer_content">
			<ul class="footer_content">
				<?php
					do{ ?>
						<li class="footer_li">
							<?php
								if($links['link']=='0')
								{ 
									echo $links['value'];?></li>
								<?php
								}
								else if($links['link'] == '1')
								{ ?>
									<a class="footer_notification_link" href="<?php echo $site_url;?>/blog/posts.php?id=<?php echo $links['url'];?>"><?php echo $links['value'];?></a></li>
								<?php
								}
								else if($links['link'] == '2')
								{ ?>
									<a class="footer_notification_link" href="<?php echo $links['url'];?>"><?php echo $links['value'];?></a></li>
								<?php
							}
					} while ($links=mysqli_fetch_assoc($result));
				?>
				<p class="footer_noti_more"><a class="footer_noti_more_link" href="<?php echo $site_url;?>/notifications.php">More >></a></p>
			</ul>
		</div>
	</div>
	<!-- starting the right side of footer -->
	<div class="footer2">
		<!-- <img class="footer1_image" src="./images/logo.png"> -->
		<p class="footer_notification_header2">About Developer</p>
		<div class="footer_content">
			<p class="footer2_text">Designed By : <a class="dev_page" href="<?php echo $site_url;?>/pages/dev-page.php">Shanu Raj</a></p>
			<p class="footer2_text">Profession : Web UI Developer</p>
			<p class="footer2_text">Mobile : (+91)8271890685</p>
			<a class="footer_notification_link" href="<?php echo $site_url;?>/other/form.php?type=error">Report Bug Or Error</a> | <a class="footer_notification_link" href="<?php echo $site_url;?>/other/form.php?type=feedback">Share Feedback</a>
		</div>
	</div>
</div>

<div class="footer_copyright_area">
	<p class="footer_text" id="footer_text">Copyright &copy; 2018 - <script>document.write(getYear());</script> | All Rights Reserved || <span class="footer_theme_by"> Pubgians Theme</span></p>
</div>
