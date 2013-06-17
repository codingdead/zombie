<?php
require_once('../../classes/page.php');

$page = new Page($_POST['id']);

$page->name = $_POST['name'];
$page->description = $_POST['description'];
$page->gender = $_POST['gender'];
$page->dod = $_POST['dod'];
$page->price = $_POST['price'];
$page->image = $_POST['image'];	

$page->update();

header('location: index.php?id='.$_POST['id']);