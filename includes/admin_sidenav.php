<?php
	require_once('../../classes/navigation.php');
	$nav  = new Navigation();
?>
<div class="sidenav">
	<h2>ZOMBIE SELECTOR</h2>
	<?php $nav->make_admin_lists(); 
	?>
	
</div>