<?php
require_once('../../classes/page.php');
require_once('../../classes/upload.php');

$page = new Page($_POST['id']);


if(isset($_POST['submit'])){
$page->name = $_POST['name'];
$page->description = $_POST['description'];
$page->gender = $_POST['gender'];
$page->dod = $_POST['dod'];
$page->price = $_POST['price'];
if(isset($_FILES['file']['tmp_name'][0])){		
$page->image = $_FILES['file']['name'][0];
Upload::files_to('../assets/images');
}
$page->update();
}

		

header('location: index.php?id='.$_POST['id']);