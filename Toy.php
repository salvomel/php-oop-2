<?php
require_once __DIR__ . '/Item.php';

class Toy extends Item {
    
    public $age;

    // override
    public function __construct($_id_code, $_brand, $_category, $_price, $_age) {
        parent::__construct($_id_code, $_brand, $_category, $_price);
        $this->age = $_age;
    }

}
?>