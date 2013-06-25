<?php

	require_once('../../classes/page.php');

	$page = new Page();

	$page->load($_GET['id']);
	$page->hide();

	header('location: index.php');
	exit;