<?php 
require_once('../classes/form.php');
require_once('../classes/cart.php');

$form = new Form();

 ?>

<div class="main">
	
	
	
	<table class="view_cart">
		<tr>
			<th colspan="2">Product</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Remove</th>
			<th>Total</th>
		</tr>
		<?php if($products = Cart::get_all()): ?>
			<?php foreach ($products as $product): ?>
				<tr class="product">
					<td class="image"><img src="assets/images/<?php echo $product['image']; ?>" alt="" width="50"></td>
					<td><a href="index.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
					<td>$ <?php echo $product['price']; ?></td>
					<td><?php echo $product['quantity']; ?></td>
					<td><a href="remove_item.php?id=<?php echo $product['id']; ?>">Clear</a></td>
					<td>$ <?php echo $product['price'] * $product['quantity']; ?></td>
				</tr>				
			<?php endforeach ?>
			<?php echo $form->open('../includes/save_order.php', 'post');			
			echo $form->hidden('date', date("Y/m/d H:i:s"));			
			echo $form->submit('submit', 'Place Order');
			echo $form->close(); ?>
			<tr class="total">
				<td colspan="4">Grand Total</td>
				<td>$ <?php echo Cart::total_price(); ?></td>
			</tr>
		<?php else: ?>
			<tr>
				<td colspan="5">There are no products to display</td>
			</tr>
		<?php endif;?>
	</table>
	<a href="clear_cart.php">Clear</a>
	<a href="../public/index.php">Home</a>
	
</div>