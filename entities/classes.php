<?php
class Product {

    public $name;
    public $type;
    private $price;

    function __construct($_name, $_type, $_price){
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
    }
}
?>