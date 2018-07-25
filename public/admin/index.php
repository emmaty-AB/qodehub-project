<?php
require_once("../../includes/initialize.php");

if(!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('admin_header.php'); ?>

	<h2>Menu</h2>
	
	<?php echo output_message($message); ?>
	<ul>
		<li><a href="list_photos.php">List Photos</a></li>
		<li><a href="logfile.php">View log file</a></li>
		<li><a href="#">Logout</a></li>
	</ul>

	</div>

<?php include_layout_template('admin_footer.php'); ?>