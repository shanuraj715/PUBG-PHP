 <?php require("../config.php");
	require("../dbconnect.php");
	
	
	if(empty($_POST))
	{
	    echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
		// header('Location: '.$site_url.'/admin/login.php');
	}
	else if(empty($_POST['key']))
	{
		echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
	}
	if($_POST['user']=="" or empty($_POST['user']))
	{
		echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
	}
	else if($_POST['pass']=="" or empty($_POST['pass']))
	{
		echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
	}
	else if($_POST['key']=="" or empty($_POST['key']))
	{
		echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
	}
	else
	{
		if($_POST['key']!='true')
		{
			echo "<script>window.open(site_url+'/admin/login.php','_self');</script>";
		}
		else
		{
			$username = $_POST['user'];
			$password = $_POST['pass'];
		}
	}
	$sql = "select * from admin where username = '$username' and password = '$password'";
	$result = mysqli_query($dbconnect, $sql);
	$data = mysqli_fetch_assoc($result);
	if($data['enabled']=='0')
	{
		echo "<script>window.open(site_url+'/admin/login.php?e=false','_self');</script>";
	}
	else
	{
		if(($username==$data['username']) and $password==$data['password'])
		{
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['date'] = date("d-m-Y");
			echo "<script>window.open(site_url+'/admin/dashboard.php','_self');</script>";
// 			echo "Page";
// 			header("Location: http://techfacts007.in");
// 			exit();
// 			echo "NEW";
		}
		else
		{
		    echo "<script>window.open(site_url+'/admin/login.php?e=true','_self');</script>";
		  //  echo "LL";
		}
	}
?>