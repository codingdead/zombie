<div class="main">
	<?php if($page->id > 0): ?>
		<h2><?php echo $page->name; ?></h2>
		<div class="image">
		<img src="../../assets/images/<?php echo $page->image; ?>" alt="">			
		</div>
	<div class="info">		
		<p><?php echo $page->description; ?></p>
		<h3><?php echo $page->gender; ?></h3>
		<h3><?php echo $page->dod; ?></h3>
		<h3>$<?php echo $page->price; ?></h3>
		<?php else: ?>
		<h2>There is no page with that id.</h2>
		<?php endif; ?>
		<?php  	echo '<a href="edit_page.php?id='.$page->id.'" id="button" class="sidenav">Edit Page</a>';?>		
		
	</div>
</div>
