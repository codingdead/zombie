<?php
require_once('../classes/database.php');
require_once('../classes/order.php');
require_once('../classes/orderline.php');
require_once('../classes/cart.php');
$order = new Order();


if(isset($_POST['submit'])){
	
	$order->date = $_POST['date'];
	
	$order->save();
	foreach($_SESSION['cart'] as $id => $quantity){		
		$orderline = new Orderline();
		$orderline->order_id = $order->id;
		$orderline->zombie_id = $id;
		$orderline->quantity = $quantity;
		$orderline->save();
	}
}





header('location: ../public/index.php');