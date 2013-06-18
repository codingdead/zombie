<?php
	require_once('../classes/navigation.php');
	$nav  = new Navigation();
?>
<div class="sidenav">
	<?php $nav->make_lists(); 
	echo '<a href="view_cart.php" id="button" class="sidenav">View Cart</a>';?>
</div>