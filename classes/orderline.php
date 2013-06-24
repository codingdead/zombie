<?php
/*
	This is a model of a record from tb_products
*/
require_once('database.php');

class Orderline{

	# These are the fields from tb_products
	public $id;
	public $order_id;
	public $zombie_id;
	public $quantity;	
	private $db;


	function __CONSTRUCT($id = 0){
		# Set the database property to the db we supplied.
		$this->db = new Database();

		if($id != 0){
			$this->load($id);
		}
	}

	# This function takes an id, and gets the record from the database with it.
	function load($id){
		$result = $this->db->get_one(
			'order_id, zombie_id, quantity',
			'tb_orderline',
			'orderline_id = '.$id
		);

		if(count($result)){
			$this->id = $id;
			$this->name = $result['order_id'];
			$this->description = $result['zombie_id'];
			$this->gender = $result['quantity'];
			
		}

		return $result;
	}

	# Create a new record in tb_products that reflects this object
	function save(){
		if($this->id){
			$this->update();
		}else{
			$this->id = $this->db->insert(
				'tb_orderline',
				array(
					'order_id' => $this->order_id,
					'zombie_id' => $this->zombie_id,
					'quantity' => $this->quantity
					
				)
			);
		}
	}



	function update(){
		$this->db->update(
			'tb_orderline',
				array(
					'order_id' => $this->order_id,
					'zombie_id' => $this->zombie_id,
					'quantity' => $this->quantity
			),
			array(
				'orderline_id' => $this->id
			)
		);
	}

	function hide(){
		$this->db->update(
			'tb_orderline',
			array('hidden' => 1),
			array('orderline_id' => $this->id)
		);
	}

}
