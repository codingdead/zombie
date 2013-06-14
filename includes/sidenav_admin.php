<?php
	require_once('../../classes/navigation.php');
	$nav  = new Navigation();
?>
<div class="sidenav">
	<?php $nav->make_lists(); ?>
	<form action="">
		<input id="submit" type="submit" name="submit" value="View Cart"/>
	</form>
</div>