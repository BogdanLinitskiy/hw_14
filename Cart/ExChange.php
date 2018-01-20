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
                return $arr=['name'=>$name,
                            'description'=>$description,
                            'cost'=>$cost,
                            'currency'=>$currency];//вернуть массив со всеми значениями и перебрать его в другом методе
                break;
            case 'usd':
                $cost= $cost/25;
                $cost = substr($cost,0,5);
                $this->addProduct($name,$description,$cost,$currency);
                return $arr=['name'=>$name,
                    'description'=>$description,
                    'cost'=>$cost,
                    'currency'=>$currency];
                break;
            case 'eur':
                $cost = $cost/30;
                $cost = substr($cost,0,5);
                $this->addProduct($name,$description,$cost,$currency);
                return $arr=['name'=>$name,
                    'description'=>$description,
                    'cost'=>$cost,
                    'currency'=>$currency];
                break;
            default;
        endswitch;
    }

    public function getProducts($name,$description,$cost,$currency){
       $ar = $this->convert($name,$description,$cost,$currency);
       foreach ($ar as $key =>$value){
           if(!is_array($value)){
               echo "<p>$key : $value</p>";
           }
       }
    }
}