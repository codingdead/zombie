<?php

require_once('../../classes/page.php');
require_once('../../classes/upload.php');


$page = new Page();

# Handle the form submit
if(isset($_POST['submit'])){
	Upload::files_to('../assets/images');		
	$page->name = $_POST['name'];
	$page->description = $_POST['description'];
	$page->gender = $_POST['gender'];
	$page->dod = $_POST['dod'];
	$page->price = $_POST['price'];
	$page->image = $_FILES['file']['name'][0];

	$page->save();	
}


header('location: index.php?id='.$_POST['id']);