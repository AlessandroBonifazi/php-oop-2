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

class GuestAccount {

    public $name;
    public $surname;
    public $address;
    public $discount = false;
    public $total = 100;

    public function totalPrice() {
        if($this->discount) {
            $discountPrice = $this->total * (20 / 100);
            return $this->total - $discountPrice; 

        } else {
            return $this->total;
        }
    }
}

class MemberAccount extends GuestAccount {

    public $discount = true;
    public $orderHistory;
    protected $dateOfBirth;
    protected $email;
    protected $phone;

}
?>