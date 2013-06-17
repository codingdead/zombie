<?php
	require_once('../../classes/navigation.php');
	$nav  = new Navigation();
?>
<div class="sidenav">
	<?php $nav->make_admin_lists(); 
	echo '<a href="new_page.php" id="button" class="sidenav">New Zombie</a>';?>
	
</div>