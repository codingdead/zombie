<?php

session_start();

require_once('database.php');

class Cart{




	/**
	* 
	* Add a product to the cart
	* 
	* $id 			int
	* $quantity 	int
	*/
	static public function store_product($id, $quantity){
		# Make sure there is a cart array inside the session
		self::init();

		# if this product already exists then just bump up the quantity
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id] += $quantity;

		# if the product doesn't exist yet, create a new entry for it
		}else{
			$_SESSION['cart'][$id] = $quantity;
		}
	}




	/**
	* 
	* Clear the cart
	* 
	*/
	static public function clear(){
		unset($_SESSION['cart']);
	}




	/**
	* 
	* Get all the relevant info on each product in the cart
	* 
	*/
	static public function get_all(){
		if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
			foreach($_SESSION['cart'] as $id => $quantity){
				$temp = new Page($id);
				$products[] = array(
					'id' => $temp->id,
					'name' => $temp->name,
					'description' => $temp->description,
					'dod' => $temp->dod,
					'image' => $temp->image,
					'price' => $temp->price,
					'quantity' => $quantity
				);
			}
			return $products;
		}else{
			return false;
		}
	}




	/**
	* 
	* Return the total price of all products in the cart
	* 
	*/
	static public function total_price(){
		$products = self::get_all();
		$total = null;

		foreach($products as $product){
			$total += $product['price'] * $product['quantity'];
		}

		return $total;
	}




	/**
	* 
	* Make sure there is a cart entry in the $_SESSION array
	* 
	*/
	static private function init(){
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}
	}

}