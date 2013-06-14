<?php

require_once('database.php');

class Navigation{

	private $db;

	function __CONSTRUCT(){
		$this->db = new Database();
	}


	# We need a function that will create some unordered
	# lists for us based on names
	function make_lists(){
		$all_of_the_zombies = $this->get_names();
			echo '<ul>';
			foreach($all_of_the_zombies as $zombie){
				echo '<li>';
				echo '<a href="index.php?zombie='.$zombie['zombie_id'].
						'">'.$zombie['name'].'</a>';
				echo '</li>';			}
			echo '</ul>';		
	}

	# Since the navigation sidebar needs to be slightly different for the admin,
	# we need to make a specialised function for it.
	function make_admin_lists(){
		$all_of_the_zombies = $this->get_names();
					echo '<ul>';
					foreach($all_of_the_zombies as $zombie){
						echo '<li>';
						echo '<a href="index.php?zombie='.$zombie['zombie_id'].
								'">'.$zombie['name'].'</a>';
						echo '</li>';			}
					echo '</ul>';		
			
		echo '<form action=""><a href="new_page.php" id="submit" class="sidenav">New Zombie</a>';
	}



	# We need a function to get all the names
	function get_names(){
		$names = $this->db->get('zombie_id, name', 'tb_products');
		return $names;
	}


	# We also need a function to get all of the pages
	# for a specific category that we ask for.
	function get_pages_by_category_id($cat_id){
		$pages = $this->db->get(
			'title, page_id',
			'tb_pages',
			'category_id = '.$cat_id.' AND hidden=0 ORDER BY page_id ASC'
		);


		return $pages;
	}

}