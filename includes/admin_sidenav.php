<?php
	require_once('../../classes/navigation.php');
	$nav  = new Navigation();
?>
<div class="sidenav">
	<?php $nav->make_admin_lists(); ?>
	
</div>