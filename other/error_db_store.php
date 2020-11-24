<?php include("../config.php"); ?> <!-- Include The Configuration File -->
<!-- Include Database Connection File -->
<?php include('../dbconnect.php'); ?> 
<?php 
	if(empty($_POST))
	{
		// if no $post variables then homepage
		$error_type = "Undefined";
	}
	else if(empty($_POST['err_type']))
	{
		// if $post values is feedback
		$error_type = "feedback";
	}
	else if(!empty($_POST['err_type']))
	{
		$error_type = $_POST['err_type']; 
	} 
	if(!empty($_POST['refer_page']))
	{
		$refer_page = $_POST['refer_page'];
		$refer_page = str_replace('%20', '&', $refer_page);
	}
	else
	{
		$refer_page = "";
	}
?>
<?php 
	if($error_type=='Undefined')
	{
		header('Location: '.$site_url);
	}
	else
	{
		$fname = $_POST['f_name'];
		$lname = $_POST['l_name'];
		$email = $_POST['email'];
		$date = date('d-m-Y');
		$text = $_POST['explained_text'];
		$sql = "INSERT into `error_feedback` (`fname`, `lname`, `email`, `error_type`, `date`, `explained`, `error_page`) VALUES ('$fname','$lname','$email','$error_type','$date','$text','$refer_page')";
		if(mysqli_query($dbconnect,$sql))
		{
			// echo 'done';
			$done = true;
		}
		else
		{
			// echo "Error: " . $sql . "<br>" . mysqli_error($dbconnect);
			$done = false;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php print($site_title); ?></title>
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/index.css">
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/navbar.css">
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/footer.css">
	<link rel="stylesheet" href="<?php echo $site_url; ?>/css/form.css">
	<script type="text/javascript" src="<?php echo $site_url; ?>/js/functions.js"></script>
	<link rel="icon" href="<?php echo $site_url; ?>/images/favicon.png" />
</head>
<body>
<?php include "../header.php"; ?>

<div class="form_db_block">
	<h2 class="form_db_text">Data Submitted Successfully</h2>
</div>
<h2 class="form_db_text1">You will automatically redirect in 10 seconds</h2>
<meta http-equiv="refresh" content="10;URL='<?php echo $site_url;?>/blog'">
<h2 class="form_db_text2"><a class="form_db_text2_a" href="<?php echo $site_url;?>/blog" title="Go To Blog Homepage" > Go To Homepage</a></h2>
<?php include "../footer.php"; ?>
</body>
</html>