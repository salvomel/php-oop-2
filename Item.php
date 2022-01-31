<?php

require_once __DIR__ . '/Invoice.php';
class Item {

    use Invoice;

    public $id_code;
    public $brand;
    public $category;
    public $price;

    public function __construct($_id_code, $_brand, $_category, $_price) {
        $this->id_code = $_id_code;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
    }
}
?>