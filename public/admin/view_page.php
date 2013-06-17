<?php
require_once('../../classes/page.php');

# load the page with the id
$page = new Page($_GET['id']);

include('../../includes/admin_header.php');
include('../../includes/admin_sidenav.php');
include('../../includes/admin_page.php');
include('../../includes/footer.php');