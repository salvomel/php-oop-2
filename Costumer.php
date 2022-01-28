<?php

class Costumer {

    public $name;
    public $lastname;
    public $email;
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
}
?>