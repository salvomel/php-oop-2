<?php
require_once __DIR__ . '/Item.php';

class Shoes extends Item {
    
    public $gender;
    public $shoe_number;

    // override
    public function __construct($_id_code, $_brand, $_category, $_price, $_gender, $_shoe_number) {
        parent::__construct($_id_code, $_brand, $_category, $_price);
        $this->gender = $_gender;

        // Exception:
        // $_shoe_number deve essere un numero intero
        if(is_int($_shoe_number)) {
            $this->shoeNumber = $_shoe_number;
        } else {
            throw new Exception('$_shoe_number deve essere un numero intero');
        }
    }

}
?>