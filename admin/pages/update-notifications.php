<?php
require("../config.php");
require("../dbconnect.php"); 
	$sql = "SELECT * from notifications order by id";
	$result = mysqli_query($dbconnect, $sql);
	$notifications = mysqli_fetch_assoc($result);

	if(empty($_GET) or empty($_GET['q']))
	{
		$page='home';
	}
	else if($_GET['q']=='update')
	{
		$page='update_notification';
	}
	else if($_GET['q']=='delete')
	{
		$page='delete_notification';
	}
	else{
		$page='home';
	} ?>

<?php if($page=='home')
{ ?>
<div class="">
	
</div>

<div class="content_container">
	<h1 class="heading">Manage Notifications</h1>
	<div class="content_area">
		<div class="notifications_block"> 
			<ul class="unorder_notifications">
				<li class="list_notification_title">ID - List Order - Link - URL - Value </li>
		<?php if(!empty($_GET))
		{ 
			do{ ?>
				
					<div class="li_block">
						<li class="list_notification">
							<p class="li_color_id li_display_space">
								<?php 
								echo $notifications['id'];
								echo " - "; ?> </p>
							<p class="li_color_list_order li_display_space">
								<?php
								echo $notifications['list_order'];
								echo " - "; ?> </p>
							<p class="li_color_link li_display_space">
								<?php
								echo $notifications['link'];
								echo " - "; ?></p>
							<p class="li_color_url li_display_space">
								<?php
								echo $notifications['url'];
								echo " - "; ?></p>
							<p class="li_color_value li_display_space">
								<?php
								echo $notifications['value'];
								?></p>
						</li>
						<p class="edit_btn_p"><a class="edit_btn" href="<?php echo $site_url; ?>/admin/dashboard.php?p=update-notifications&q=update&id=<?php echo $notifications['id'];?>">Edit</a> / <a class="edit_btn" href="<?php echo $site_url; ?>/admin/dashboard.php?p=update-notifications&q=delete&id=<?php echo $notifications['id'];?>">Delete</a></p>
					</div>
						
			<?php 
			}while($notifications=mysqli_fetch_assoc($result));
		 
		} ?>

				</ul>
			</div>

	</div>
	
</div>

<?php 
}
else if($page=='update_notification')
{  ?>


<?php
}

else if($page=='delete_notification')
{ 
	if(empty($_GET['id']))
	{
		header('Location: '.$site_url.'/admin/dashboard.php'); 
	}
	else{ 
		$id = $_GET['id'];
		$sql = "DELETE FROM `notifications` WHERE id = $id";
		if(mysqli_query($dbconnect,$sql))
		{
			// echo 'done';
			$done = true; ?>

		Delete Completed
		<meta http-equiv="refresh" content="3;URL='<?php echo $site_url;?>/admin/dashboard.php?p=update-notifications'">
		<?php
		}
		else
		{
			// echo "Error: " . $sql . "<br>" . mysqli_error($dbconnect);
			$done = false;
		}
	}
}
 ?>