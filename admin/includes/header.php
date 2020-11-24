<?php
	require("../config.php");
	require("../dbconnect.php"); 
	?>
<script type="text/javascript" src="./js/functions.js"></script>


<div class="navbar">
	 <a class="link" href="<?php echo $site_url; ?>">Home</a>
	 <a class="link" href="<?php echo $site_url; ?>/admin/dashboard.php?p=update-notifications">Update Notifications</a>
	 <div class="dropdown">
	 	<button class="dropbtn">Update Data</button>
		 <div class="dropdown-content">
		 	<a class="link" href="#">Update Guns</a>
		 	<a class="link" href="#">Update Assets</a>
	 	</div>
	</div>

	<div class="logout">
		<button class="btn-logout" onclick="logout();">Logout</button>
		<div class="dropdown">
			<button class="dropbtn" onclick="myaccount()">My Account</button>
			<div class="dropdown-content">
				<a class="link"b href="#"><?php echo $_SESSION['username']; ?></a>
			 	<a class="link" href="#">Logged On : <?php echo $_SESSION['date']; ?></a>
			 	<a class="link" href="#">Manage Account</a>
	 		</div>
		</div>
	</div> 
</div>
