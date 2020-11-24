<?php require("../config.php");
require("../dbconnect.php"); ?>

<div class="admin_footer">
	<p class="footer_text"><?php echo $_SESSION['username']; ?> | Logged On : <?php echo $_SESSION['date']; ?></p>
</div>