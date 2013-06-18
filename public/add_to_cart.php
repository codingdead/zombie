<?php

require_once('../classes/cart.php');

Cart::store_product($_POST['zombie_id'], $_POST['quantity']);

header('location: index.php?msg=added&id='.$_POST['zombie_id']);