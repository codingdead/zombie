<?php

require_once('../classes/cart.php');

Cart::remove_item($_GET['id']);


header('location: view_cart.php');