<?php
session_start();
require "../config.php";
require "../dbconnect.php";
require_once ("./function/functions.php");

// variables of this page goes here

$count = 1;




?>
<?php 
if(empty($_GET) or empty($_GET['n']))
{
	$limit = 6;
}
else if(($_GET['n'])=="all")
{
	$limit = 40;
}
else
{
	$limit = 6;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PUBG Mobile Tournaments</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo $site_url;?>/tournament/images/fevicon.png" />
	<link rel="stylesheet" href="<?php echo $site_url;?>/tournament/css/header.css">
	<link rel="stylesheet" href="<?php echo $site_url;?>/tournament/css/index.css">
	<link rel="stylesheet" href="<?php echo $site_url;?>/tournament/css/footer.css">
	<script type="text/javascript" src="<?php echo $site_url;?>/tournament/function/functions.js"></script>
</head>
<body onload="showLiveTime()">
	<div class="side_float_block">
		<a href="<?php print($site_url);?>/tournament" title="Reload Page"><img class="side_float_img" src="<?php print($site_url);?>/tournament/images/side_float/reload.png"></a>
		<a href="#upcoming"title="Upcoming Matches"><img class="side_float_img" src="<?php print($site_url);?>/tournament/images/side_float/upcoming.png"></a>
		<a href="#result"title="Past Matches Result"><img class="side_float_img" src="<?php print($site_url);?>/tournament/images/side_float/result.png"></a>
	</div>
	<?php include './header.php'; ?>
	<a name="upcoming"></a>
	<div class="t_index_content">
		<div class="upcoming_block">
			<div class="title_block">
				<span class="title_text">Upcoming Matches</span>
			</div>
			<?php
				$sql = "SELECT `id`, `name`, `mode`, `date`, `map`, `type`, `view`, `server` from `tournament` where `enabled` = 1 order by id desc LIMIT $limit";
				$result = mysqli_query($dbconnect, $sql);
				$upcoming = mysqli_fetch_assoc($result);
			?>
			<div class="upcoming_matches_area">
				<?php 
				do{ ?>
					<div class="upcoming_matches_box">
						<div class="upcoming_match_title">
							<span class="upcoming_title"><?php print($upcoming['name']);?></span>
						</div>
						<div class="upcoming_desc_block">
							<div class="upcoming_desc_line">
								<div class="date_block">
									<span class="date_text bold">Date : </span>
									<span class="date_text"><?php print($upcoming['date']);?></span>
								</div>
								<div class="mode_block">
									<span class="mode_text bold">Mode : </span>
									<span class="mode_text"><?php print(changeMode($upcoming['mode']));?></span>
								</div>
							</div>
							<div class="upcoming_desc_line">
								<div class="map_block">
									<span class="map_text bold">Map : </span>
									<span class="map_text"><?php print(changeMap($upcoming['map']));?></span>
								</div>
								<div class="type_block">
									<span class="type_text bold">Type : </span>
									<span class="type_text"><?php print(changeType($upcoming['type']));?></span>
								</div>
							</div>
							<div class="upcoming_desc_line">
								<div class="view_block">
									<span class="view_text bold">Camera : </span>
									<span class="view_text"><?php print(changeView($upcoming['view']));?></span>
								</div>
								<div class="server_block">
									<span class="server_text bold">Server : </span>
									<span class="server_text"><?php print($upcoming['server']);?></span>
								</div>
							</div>
							<div class="upcoming_desc_line">
								<a class="read_more_btn" href="<?php echo $site_url;?>/tournament/detail.php?tournament_id=<?php print($upcoming['id']);?>">More Info</a>
							</div>
						</div>
					</div>
					<!-- End of Tournaments boxe -->
				<?php
				} while ($upcoming=mysqli_fetch_assoc($result)); ?>
			</div>
		</div> 
		<!-- End Of Upcoming -->
		<a name="result"></a>
		<div class="all_matches_block">
			<a class="all_matches" href="<?php echo $site_url;?>/tournament/?n=all">All Matches</a>
		</div>
		<hr class="t_hr_seperator" />
		<div class="last_result_block">
			<div class="title_block">
				<span class="title_text">Last 15 Matches Result</span>
			</div>
			<div class="lm_result_table_block">
				<table>
					<tr class="heading_row">
						<th class="t_lm_theading" id="result_num">No.</th>
						<th class="t_lm_theading" id="result_name">Name</th>
						<th class="t_lm_theading" id="result_time">Time</th>
						<th class="t_lm_theading" id="result_date">Date</th>
						<th class="t_lm_theading" id="result_1">Winner</th>
						<th class="t_lm_theading" id="result_2">2<sup>nd</sup></th>
						<th class="t_lm_theading" id="result_3">3<sup>rd</sup></th>
						<th class="t_lm_theading" id="result_4">4<sup>th</sup></th>
						<th class="t_lm_theading" id="result_5">5<sup>th</sup></th>
					</tr>
					<?php
						$sql = "SELECT * from `tournament_result` order by id desc LIMIT 15";
						$result = mysqli_query($dbconnect, $sql);
						$t_result = mysqli_fetch_assoc($result);
					?>
					<?php
					do
					{ 
						$get_m_id = $t_result['match_id'];
						$sql = "SELECT `name`, `time`, `date` from `tournament` where `id` = '$get_m_id' order by id desc LIMIT 15";
						$result1 = mysqli_query($dbconnect, $sql);
						$m_result = mysqli_fetch_assoc($result1); //m_result will get all the info about match like. Match name, time, date, etc, this is used because we get data from another table. result table is tournament_result. Match Details table is tournament.?>
						<tr>
							<td class="result_show" id="result_num"><?php print($count);?></td>
							<td class="result_show" id="result_name"><?php print($m_result['name']);?></td>
							<td class="result_show" id="result_time"><?php print($m_result['time']);?></td>
							<td class="result_show" id="result_date"><?php print($m_result['date']);?></td>
							<td class="result_show changeclr" id="result_1"><?php print($t_result['first']);?></td>
							<td class="result_show" id="result_2"><?php print($t_result['second']);?></td>
							<td class="result_show" id="result_3"><?php print($t_result['third']);?></td>
							<td class="result_show" id="result_4"><?php print($t_result['fourth']);?></td>
							<td class="result_show" id="result_5"><?php print($t_result['fifth']);?></td>
						</tr>
					<?php
					$count += 1;
					} while ($t_result=mysqli_fetch_assoc($result)); ?>
				</table>
			</div>
		</div>
	</div>
	<?php include './footer.php'; ?>
</body>
</html>