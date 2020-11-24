<!DOCTYPE html>
<html>
	<head>
		<?php include("../config.php"); ?> <!-- Include The Configuration File -->
		<!-- Include Database Connection File -->
		<?php include('../dbconnect.php'); ?> 
		<?php
			if(empty($_GET))
			{
				// if no $get variables then homepage
				$page_title = "Undefined Page";
			}
			else if(empty($_GET['type']))
			{
				// if no $get values then homepage
				$page_title = "Undefined Page";
			}
			else if(!empty($_GET['type']))
			{
				$p_type = $_GET['type'];
				if($p_type=='error')
				{
					$page_title = "Report Error";
				}
				else if($p_type=='feedback')
				{
					$page_title = "Share Feedback";
				}
				else
				{
					$page_title = "Not Found";
				}
			}
			if(!empty($_GET['p']))
			{
				$refer_page = $_GET['p'];
			}
			else
			{
				$refer_page = "Leave-This-Box-As-It-Is.";
			} ?>

		<title><?php echo $page_title." | ".$site_title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- linking the css file of index page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/index.css" type="text/css" />
		<!-- linking the css file of navigation page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/navbar.css" type="text/css">
		<!-- linking the css file of footer page -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/footer.css" type="text/css">
		<!-- linking the index container css file -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/indexcontainer.css" type="text/css">
		<!-- linking the form css file -->
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/form.css" type="text/css">
		<!-- site favicon icon -->
		<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
		<!-- linking the js default functions -->
		<script type="text/javascript" src="<?php echo $site_url;?>/js/functions.js"></script>
	</head>
	<body onload="changeBackgroundImage()">
		<?php include("../header.php");?>
		<div class="container_bg">
			<div id="content_container01" class="content_container">

				<!-- Area for Feedback and error Reporting -->
				<div class="_content_heading"><!-- Weapon Category -->
					<h2 class="content_heading"><?php echo $page_title; ?></h2>
				</div>
				<hr class="hr_seperator_heading" />
				<div class="index_content_form">
					<?php
					if($page_title=='Undefined Page')
					{
						header('Location: '.$site_url);
					}
					else if($page_title=='Report Error')
					{ ?>
						<form name="error_form" action="error_db_store.php" method="post">
							<label class="form" for="First Name">First Name : </label>
							<input id="text" class="text_box" type="text" name="f_name" maxlength="40" required>
							<br />
							<label class="form" for="Last Name">Last Name : </label>
							<input id="text" class="text_box" type="text" name="l_name" maxlength="40">
							<br />
							<label class="form" for="Email">Email ID : </label>
							<input id="text" class="text_box" type="email" name="email" maxlength="70" required>
							<br />
							<label class="form" for="Radio">Choose Error Type : </label>
							<div class="radio_container">
								<div class="radio_seperate">
									<input id="radio_btn" type="radio" name="err_type" value="Error In Page" required><label class="radio_text" for="error">Error&nbsp;In&nbsp;Page</label>
								</div>
								<div class="radio_seperate">
									<input id="radio_btn" type="radio" name="err_type" value="Page Not Loading" required><label class="radio_text" for="error">Page&nbsp;Not&nbsp;Loading</label>
								</div>
								<div class="radio_seperate">
									<input id="radio_btn" type="radio" name="err_type" value="404 Page Not Found" required><label class="radio_text" for="error">404&nbsp;Error&nbsp;Occured</label>
								</div>
								<div class="radio_seperate">
									<input id="radio_btn" type="radio" name="err_type" value="Automatic Refresh" required><label class="radio_text" for="error">Auto&nbsp;redirect&nbsp;Or&nbsp;Refresh</label>
								</div>
								<div class="radio_seperate">
									<input id="radio_btn" type="radio" name="err_type" required><label class="radio_text" for="other">Other</label>
								</div>
							</div>
							<label class="form" for="Date">Date : </label>
							<input id="text" class="text_box" type="text" name="date" value="<?php echo date("d-m-Y");?>" disabled>
							<br />
							<label class="form" for="link">URL : </label>
							<input id="text" class="text_box url_box" type="text" name="url" value="<?php echo str_replace(' ', '&', $refer_page);?>" disabled>
							<div class="form_text_box_area">
								<input class="form_text_box" type="text" name="explained_text" placeholder="Please Explain Your Problem with page link. Max : 255 Characters" maxlength="255">
							</div>
							<div class="btns">
								<input class="btn" type="submit" name="submit" value="Submit">
								<input class="btn" type="reset" name="reset" value="Reset Form">
							</div>
						</form>
					<?php }
					else if($page_title=='Share Feedback')
					{ ?>
						<form name="feedback" action="error_db_store.php" method="post">
							<label class="form" for="First Name">First Name : </label>
							<input id="text" class="text_box" type="text" name="f_name" maxlength="40" required>
							<br />
							<label class="form" for="Last Name">Last Name : </label>
							<input id="text" class="text_box" type="text" name="l_name" maxlength="40">
							<br />
							<label class="form" for="Email">Email ID : </label>
							<input id="text" class="text_box" type="email" name="email" maxlength="70" required>
							<br />
							<label class="form" for="Date">Date : </label>
							<input id="text" class="text_box" type="text" name="date" value="<?php echo date("d-m-Y");?>" disabled>
							</div>
							<div class="form_text_box_area">
								<input class="form_text_box" type="text" name="explained_text" placeholder="Please Explain Your Problem with page link. Max : 255 Characters" maxlength="255">
							</div>
							<div class="btns">
								<input class="btn" type="submit" name="submit" value="Submit">
								<input class="btn" type="reset" name="reset" value="Reset Form">
							</div>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php include("../footer.php");?>
	</body>
</html>