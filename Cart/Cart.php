<?php

namespace Cart;

class Cart
{
    public $products=[];
    public $cart;
    public function __construct()
    {
        if(isset($_COOKIE['cart'])){
            $this->products[]=json_decode($_COOKIE['cart'],true);
        }
        return $this->products;
    }
    public function getProducts()
    {
        foreach ($this->products as $product) {
            foreach ($product as $key=>$item) {
                if(!is_array($item)) {
//                    $result = '<p>'.$product['name'].'</p>';
//                    $result = $result.'<p>'.$product['description'].'</p>';
//                    $result = $result.'<p>'.$product['cost'].'</p>';
//                    $result = $result.'<p>'.$product['currency'].'</p>';
//                    return $result;
                    echo "<p>$key : $item</p>";
                }
            }
            echo "<br>";
        }
    }
    public function saveCart()
    {
        setcookie('cart',json_encode($this->products),time()+5);
    }
    public function addProduct($name,$description,$cost,$currency)
    {
        $this->products[]=['name' => $name,
                            'description'=>$description,
                            'cost' => $cost,
                            'currency' =>$currency];
    }
}