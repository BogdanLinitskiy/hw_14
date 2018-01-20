<?php

namespace Cart;

use Cart\Cart;
class ExChange
{
    public $product;
    public function addProduct($name,$description,$cost,$currency){
        $this->product = new Cart();
        $this->product->addProduct($name,$description,$cost,$currency);
    }

    public function convert($name,$description,$cost,$currency){
        switch ($currency):
            case 'uah':
                $this->addProduct($name,$description,$cost,$currency);
                break;
            case 'usd':
                $cost= $cost/25;
                $cost = substr($cost,0,5);
                $this->addProduct($name,$description,$cost,$currency);
                break;
            case 'eur':
                $cost = $cost/30;
                $cost = substr($cost,0,5);
                $this->addProduct($name,$description,$cost,$currency);
                break;
            default;
        endswitch;
    }
}