<?php
/*
	This is a model of a record from tb_products
*/
require_once('database.php');


class Order{

	# These are the fields from tb_orders
	public $id;
	public $date;	
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
			'date',
			'tb_orders',
			'order_id = '.$id
		);

		if(count($result)){
			$this->id = $id;			
			$this->date = $result['date'];
			
		}

		return $result;
	}

	# Create a new record in tb_orders that reflects this object
	function save(){
		if($this->id){
			$this->update();
			$this->date();
		}else{
			$this->id = $this->db->insert(
				'tb_orders',
				array(
					'date' => $this->date					
				)
			);
		}
	}

	function date(){
	$timezone =	date_default_timezone_set("Pacific/Auckland");

	return $timezone;
	}



	function update(){
		$this->db->update(
			'tb_orders',
			array(
				'date' => $this->date
			),
			array(
				'order_id' => $this->id
			)
		);
	}

	function hide(){
		$this->db->update(
			'tb_orders',
			array('hidden' => 1),
			array('order_id' => $this->id)
		);
	}

	

}