<?php
require_once __DIR__ . '/Item.php';

class Shoes extends Item {
    
    public $gender;
    public $number;

    // override
    public function __construct($_id_code, $_brand, $_category, $_price, $_gender, $_number) {
        parent::__construct($_id_code, $_brand, $_category, $_price);
        $this->gender = $_gender;
        $this->number = $_number;
    }

}
?>