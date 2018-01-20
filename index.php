<?php

use \Cart\Cart as Cart;
use \Cart\ExChange as ExChange;

function __autoload($class){
    $path = str_replace('\\','/',$class).'.php';
    if(file_exists($path)){
        require $path;
    }
}

$name = 'rofl';
$description = 'desc';
$cost = 4603;
$currency = 'usd';


$ex = new ExChange();

echo '<pre>';
$ex->getProducts($name,$description,$cost,$currency);

?>

