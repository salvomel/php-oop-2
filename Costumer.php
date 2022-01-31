<?php

class Costumer {

    public $name;
    public $lastname;
    public $email;
    public $discount = 0;
    protected $cart = [];

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    public function addProduct($product) {
       return $this->cart[] = $product;
    }

    public function getCart() {
        return $this->cart;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    public function getCartTotal() {
        $cart_total = 0;
        
        foreach($this->cart as $product) {
            $cart_total += $product->price;
        }

        $cart_total -= ($cart_total * $this->discount / 100);

        return $cart_total;
    }
}
?>