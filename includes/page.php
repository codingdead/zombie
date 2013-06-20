<?php
require_once('../classes/cart.php'); 
require_once('../classes/form_static.php');
require_once('../classes/page.php');
 ?>
<div class="main">
	<?php if($page->id > 0): ?>
		<h2><?php echo $page->name; ?></h2>
		<div class="image">
		<img src="assets/images/<?php echo $page->image; ?>" alt="" width="300">			
		</div>
	<div class="info">		
		<p><?php echo $page->description; ?></p>
		<h3><?php echo $page->gender; ?></h3>
		<h3><?php echo $page->dod; ?></h3>
		<h3>$<?php echo $page->price; ?></h3>
		<?php else: ?>
		<h2>There is no page with that id.</h2>
		<?php endif;
		form_static::open('add_to_cart.php');
		form_static::text_input_row('quantity', 'Qty.', 1);
		form_static::hidden('zombie_id', $page->id);
		form_static::submit('submit', 'Add to cart');
		form_static::close();
		?>
	</div>
</div>


