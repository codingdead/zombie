<?php 

require_once('../../classes/page.php');

$page = new Page();

# If no page number was supplied ...
if(isset($_GET['id']) == false || $_GET['id'] == ''){
	# ... then use 1.
	$zombie_id = 1;
# But if it was supplied ...
}else{
	# ... then use it.
	$zombie_id = $_GET['id'];
}

# load the page with the id
$page = new Page($zombie_id);



include('../../includes/admin_header.php');
include('../../includes/admin_sidenav.php');
include('../../includes/admin_page.php'); 
include('../../includes/footer.php'); ?>