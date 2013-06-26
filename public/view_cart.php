<?php

	//require_once('../classes/form.php');
	require_once('../classes/cart.php');
	require_once('../classes/page.php');

	include('../includes/header.php');

	$products = Cart::get_all();
	//$form = new Form();
	//$page = new Page();
	
	// print_r($_SESSION['cart']);

	require_once('../includes/view_cart.php');
	include('../includes/footer.php');?>