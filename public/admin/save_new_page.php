<?php

require_once('../../classes/page.php');


$page = new Page();

# Handle the form submit
if(isset($_POST['submit'])){	
	$page->name = $_POST['name'];
	$page->description = $_POST['description'];
	$page->gender = $_POST['gender'];
	$page->dod = $_POST['dod'];
	$page->price = $_POST['price'];
	$page->image = $_POST['image'];	

	$page->save();	
}


header('location: new_page.php');