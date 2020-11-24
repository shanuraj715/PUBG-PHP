<?php
require "../config.php";
require "../dbconnect.php";
?>
<?php
	$sql = "SELECT * from navigation_menu where `p_id`='9' order by btn_order asc";
	$result = mysqli_query($dbconnect, $sql);
	$header_data = mysqli_fetch_assoc($result);
?>

<?php
if((isset($_SESSION['username'])) and (isset($_SESSION['userid'])))
{
	$userid = $_SESSION['userid'];
	$sql = "SELECT c_id from users where `u_id`= $userid";
	$result2 = mysqli_query($dbconnect, $sql);
	$c_id = mysqli_fetch_assoc($result2);

	$logoutBtnState = 1;
	$myProfileBtnState = 1;
}
else
{
	$logoutBtnState = 0;
	$myProfileBtnState = 0;
}
?>

<div class="t_header_block">
	<div class="header_content_block">
		<h1 class="t_title">PUBG Mobile Tournament</h1>
		<span class="t_subtitle">Join our online PUBG Mobile tournaments and earn real money</span>
		<div class="time_block">
			<span class="display_time" id="liveTime"></span>
		</div>
	</div>
	<div class="navigation_block" id="navbar">
		<div class="link_block">
			<a class="nav_link" href="<?php echo $site_url;?>">Site Homepage</a>
		</div>
		<div class="link_block">
			<a class="nav_link" href="<?php echo $site_url;?>/tournament">Home</a>
		</div>
		<?php
			do{ ?>
				<div class="link_block">
					<a class="nav_link" href="<?php echo($header_data['link']);?>"><?php print($header_data['name']);?></a>
				</div>
				<?php
			} while ($header_data=mysqli_fetch_assoc($result));
		?>
		<?php
		if($myProfileBtnState==1)
			{ ?>
			<div class="link_block">
				<a class="nav_link" href="<?php print($site_url);?>/tournament/dashboard.php?u_id=<?php print($_SESSION['userid']);?>&c_id=<?php print($c_id['c_id']);?>&n=profile">My Profile</a>
			</div>
			<?php
		} ?>
		<?php
		if($logoutBtnState==1)
			{?>
			<div class="link_block">
				<a class="nav_link" id="logout_btn" href="<?php print($site_url);?>/tournament/logout.php">Logout</a>
			</div>
			<?php
		}?>
		<?php
		if($logoutBtnState!=1)
			{?>
			<div class="link_block">
				<a class="nav_link" id="nav_link" href="<?php print($site_url);?>/tournament/login.php">Login</a>
			</div>
			<?php
		}?>
		<?php
		if($logoutBtnState!=1)
			{?>
			<div class="link_block">
				<a class="nav_link" id="nav_link" href="<?php print($site_url);?>/tournament/login.php?p=signup">SignUp</a>
			</div>
			<?php
		}?>
	</div>
</div>
<script>
window.onscroll = function()
{
	myFunction()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>