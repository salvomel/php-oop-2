<?php
require_once __DIR__ . '/Item.php';

class Electronics extends Item {
    
    public $type;

    // override
    public function __construct($_id_code, $_brand, $_category, $_price, $_type) {
        parent::__construct($_id_code, $_brand, $_category, $_price);
        $this->type = $_type;
    }

}
?>