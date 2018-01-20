<?php

require_once 'Cart/Cart.php';
require_once 'Cart/ExChange.php';

use \Cart\Cart as Cart;
use \Cart\ExChange as ExChange;

$name = 'rofl';
$description = 'desc';
$cost = 4603;
$currency = 'uah';

$c = new Cart();

$c->saveCart();
$c->getProducts();

$ex = new ExChange();

echo '<pre>';
$ex->convert($name,$description,$cost,$currency);

