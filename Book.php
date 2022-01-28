<?php
require_once __DIR__ . '/Item.php';

class Book extends Item {
    
    public $title;
    public $author;

    // override
    public function __construct($_id_code, $_brand, $_category, $_price, $_title, $_author) {
        parent::__construct($_id_code, $_brand, $_category, $_price);
        $this->title = $_title;
        $this->author = $_author;
    }

}
?>