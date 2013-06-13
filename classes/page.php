<?php
/*
	This is a model of a record from tb_products
*/
require_once('database.php');

class Page{

	# These are the fields from tb_products
	public $id;
	public $name;
	public $description;
	public $gender;
	public $dod;
	public $price;
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
			'name, description, gender, dod, price',
			'tb_products',
			'zombie_id = '.$id
		);

		if(count($result)){
			$this->id = $id;
			$this->name = $result['name'];
			$this->description = $result['description'];
			$this->gender = $result['gender'];
			$this->dod = $result['dod'];
			$this->price = $result['price'];
		}

		return $result;
	}

	# Create a new record in tb_products that reflects this object
	function save(){
		if($this->id){
			$this->update();
		}else{
			$this->id = $this->db->insert(
				'tb_products',
				array(
					'name' => $this->name,
					'description' => $this->description,
					'gender' => $this->gender,
					'dod' => $this->dod,
					'price' => $this->price
				)
			);
		}
	}



	function update(){
		$this->db->update(
			'tb_products',
			array(
				'name' => $this->name,
				'description' => $this->description,
				'gender' => $this->gender,
				'dod' => $this->dod,
				'price' => $this->price
			),
			array(
				'zombie_id' => $this->id
			)
		);
	}

	function hide(){
		$this->db->update(
			'tb_products',
			array('hidden' => 1),
			array('zombie_id' => $this->id)
		);
	}

}