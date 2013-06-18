<?php

require_once('../classes/cart.php');

Cart::clear();

header('location: view_cart.php');