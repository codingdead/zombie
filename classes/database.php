<?php

class Database{

	private $connection = null;

	# when this class is created, connect to the db
	public function __construct(){
		$this->connection = new mysqli(
			'localhost', # hostname
			'root',		 # username
			'',			 # password
			'zombie'	 # database
		);
	}

	/*
		This function makes a SELECT query based on
		the fields that were provided, and the table name
		that was provided.

		$fields String
		$table  String
		$where  String (eg. "page_id = 1")
	*/
	public function get($fields, $table, $where = false){
		$select_query = "
			SELECT $fields
			FROM $table
		";

		if($where != false){
			$select_query .= ' WHERE '.$where;
		}

		$result = $this->connection->query($select_query);
	
		# If there's any error, tell us, and stop.
		if(!$result){
			echo '<b>Query Error</b>:<br>';
			echo $select_query;
			exit;
		}

		return $this->make_into_assoc($result);

	}

	# Run the above "get" function, and only return the first result
	public function get_one($fields, $table, $where = false){
		$result = $this->get($fields, $table, $where);
		return $result[0];
	}









	public function update($table, $data, $where){

		# construct the update query
		$update_query = 'UPDATE '.$table;
		# add the set part
		$update_query .= $this->make_set($data);
		# and add the where part
		$update_query .= $this->make_where($where);

		# attempt the query, and store the result in $success
		$success = $this->query($update_query);

		# FAIL
		if(!$success){
			echo 'There was a problem with your query<br>';
			echo $update_query;

		# SUCCEED
		}else{
			# return the number of rows that we updated
			return $this->connection->affected_rows;
		}
	}


	public function insert($table, $data){
		$insert_query = 'INSERT INTO '.$table;
		$insert_query .= $this->make_set($data);

		$success = $this->query($insert_query);

		# FAIL
		if(!$success){
			echo 'There was an error with your query<br>';
			echo $insert_query;

		# SUCCEED
		}else{
			return $this->connection->insert_id;
		}

	}


	function delete($table, $where){
		$delete_query = 'DELETE FROM '.$table;
		$delete_query .= $this->make_where($where);

		$success = $this->connection->query($delete_query);

		if(!$success){
			echo 'There was an error with your query<br>';
			echo $delete_query;
			return false;
		}else{
			return true;
		}
	}










	public function make_where($data){
		$first_loop = true;

		foreach($data as $field => $value){
			if($first_loop){
				$where .= ' WHERE '.$field.' = "'.$value.'"'."\n";
				$first_loop = false;
			}else{
				$where .= ' AND '.$field.' = "'.$value.'"'."\n";
			}
		}

		return $where;
	}










	
	/*
		$data is an assoc array
	*/
	private function make_set($data){
		$set = ' SET ';

		foreach($data as $field => $value){
			$set .= $field.' = "'.$this->filter($value).'", ';
		}

		return substr($set, 0, -2);
	}


	# the way in
	private function filter($input){
		$output = $this->connection->real_escape_string($input);
		return $output;
	}

	# the way out
	private function sanitize($input){
		$output = htmlspecialchars($input);
		return $output;
	}


	/*
		This function turns a mysqli_result into an
		associative array. Much easier to work with.
	*/
	private function make_into_assoc($result){
		$rows = array();

		while($row = $result->fetch_assoc()){
			//print_r($row);exit;
			foreach($row as $key => $value){
				$row[$key] = $this->sanitize($value);
			}
			$rows[] = $row;

		}

		return $rows;
	}

	# run a standard query
	function query($query_string){
		return $this->connection->query($query_string);
	}

}

