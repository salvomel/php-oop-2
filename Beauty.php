<?php
require_once __DIR__ . '/Item.php';

class Beauty extends Item {
    
    public $classification;
    public $use;

    // override
    public function __construct($_id_code, $_brand, $_category, $_price, $_classification, $_use) {
        parent::__construct($_id_code, $_brand, $_category, $_price);
        $this->classification = $_classification;
        $this->use = $_use;
    }

}
?>