<?php

	require_once('../classes/form.php');
	require_once('../classes/cart.php');
	require_once('../classes/page.php');

	$products = Cart::get_all();
	$form = new Form();
	$page = new Page();

	echo $form->open('../includes/save_order.php', 'post');	
	echo $form->submit('submit', 'Place Order');
	echo $form->close();
	
	

	// require_once('../views/layout/header.php');
	// echo '<pre>';print_r(Cart::get_all());echo '</pre>';
	// echo '<pre>';print_r(Cart::total_price());echo '</pre>';
	require_once('../includes/view_cart.php');
	// require_once('../views/layout/footer.php');