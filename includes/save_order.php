<?php
require_once('../classes/order.php');
require_once('../classes/orderline.php');
$order = new Order();
$orderline = new Orderline();

if(isset($_POST['submit'])){
	
	$order->date = $_POST['date'];
	$order->save();
	$orderline->quantity = $_POST['quantity'];
	$orderline->zombie_id = $_POST['zombie_id'];
	$orderline->save();
	
}





header('location: ../public/index.php');