<?php session_start();
ob_start();
require "../config.php";
require "../dbconnect.php";
include "./function/functions.php";
?>

<?php
if(isset($_GET['tournament_id']) and $_GET['tournament_id'] != ""){
	$tournamentid = $_GET['tournament_id'];
}
else{
	header("Location: " . $site_url . '/tournament');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo $site_url;?>/tournament/images/fevicon.png" />
	<link rel="stylesheet" href="<?php echo $site_url;?>/tournament/css/header.css">
	<link rel="stylesheet" href="<?php echo $site_url;?>/tournament/css/details.css">
	<link rel="stylesheet" href="<?php echo $site_url;?>/tournament/css/footer.css">
	<script type="text/javascript" src="<?php echo $site_url;?>/tournament/function/functions.js"></script>
</head>
<body onload="showLiveTime()">
	<?php include "./header.php";?>
	<div class="t_details_block1">
		<div class="top_image_block">
			<img class="top_image" src="<?php print($site_url);?>/tournament/images/pubgmobile.png">
		</div>
		<?php
		$sql = "SELECT * from tournament where `id`='$tournamentid'";
		$result = mysqli_query($dbconnect,$sql);
		$data = mysqli_fetch_assoc($result);
		if($data['view']==1)
		{
			$view = "TPP (Third Person Prespective)";
		}
		elseif($data['view']==2)
		{
			$view = "FPP (First Person Prespective)";
		} 
		if($data['emulator']==1)
		{
			$emulator_text = "Emulator Players are allowed in this tournament. All emulator players can participate in this tournament and they can Earn Money.<br>Any type of Cheating or Hacking in between the game is not allowed.";
		}
		elseif($data['emulator']==0)
		{
			$emulator_text = "Emulator Players are not allowed in this tournament. If we find anyone playing on emulator we will kick out that player from the room or inbetween the match.<br>Any type of Cheating or Hacking in between the game is not allowed.";
		}
		?>
		<div class="details_block">
			<div class="details_subblock1">
				<div class="line_block">
					<span class="match_name1">Tournament Name :</span><span class="text_right" id="match_name"> <?php print($data['name']);?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="mode">Game Mode : </span><span class="text_right"><?php print(changeMode($data['mode']));?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="map">Game Map : </span><span class="text_right"><?php print(changeMap($data['map']));?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="time">Game Time : </span><span class="text_right"><?php print($data['time']);?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="date">Game Date : </span><span class="text_right"><?php print($data['date']);?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="view">Camera View : </span><span class="text_right"><?php print($view);?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="server">Game Server : </span><span class="text_right"><?php print($data['server']);?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="type">Tournament Type : </span><span class="text_right"><?php print(changeType($data['type']));?></span>
				</div>
				<div class="line_block">
					<span class="match_name1" id="max_player">Maximum Players : </span><span class="text_right"><?php print($data['max_player']);?></span>
				</div>
			</div>
			<hr>
			<hr>
			<div class="details_subblock2">
				<div class="read_carefully_block">
					<span class="readme">Important (Read Before Registration)</span>
				</div>
					<div class="regfee">
						<span class="regfee_text" id="reg_fee">Registration Fee (Per Head) : </span><span class="text_right">Rs. 120</span>
					</div>
					<div class="emulator">
						<span class="emulator_text"><?php print($emulator_text);?></span>
					</div>
			</div>
		</div>
		<!--<?php
		/* $sql = "SELECT `id`,`name`,`time`,`date`,`mode` from tournament where `enabled`=1 order by id desc limit 10";
		$result = mysqli_query($dbconnect,$sql);
		$matches = mysqli_fetch_assoc($result);?>
		<div class="sidebar">
			<div class="matches_title_block">
				<span class="m_title">More Matches</span>
			</div>
			<?php
			do{
				?>
				<div class="match_block">
					<div class="line1">
						<span class="matches1 match_title"><?php print($matches['name']);?></span>
						<span class="matches2"><?php print(changeMode($matches['mode']));?></span>
					</div>
					<div class="line2">
						<span class="time"><?php print($matches['time']);?></span>
						<span class="date"><?php print($matches['date']);?></span>
					</div>
					<div class="more_btn_block">
						<a href="<?php print($site_url);?>/tournament/detail.php?tournament_id=<?php print($matches['id']);?>" class="more_btn">Read More</a>
					</div>
				</div>
				<?php
			} while($matches=mysqli_fetch_assoc($result)); */ ?>
		</div>
		<div class="other_info_block">
			





		</div> -->
	</div>
	</div>


	<?php include "./footer.php";?>
</body>
</html>