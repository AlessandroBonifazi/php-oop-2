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

class PaymentMethod {
    
    public $cardNumber;
    public $expireDate;

    public function cardCheck() {
        if($this->expireDate <= 2022) {
            return 'Carta scaduta';
        } else {
            return 'Carta valida';
        }
    }
}

class GuestAccount extends PaymentMethod {

    public $name;
    public $surname;
    public $address;
    public $discount = false;
    public $total = 100;

    function __construct($_name, $_surname, $_address, $_cardNumber, $_expireDate){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->address = $_address;
        $this->cardNumber = $_cardNumber;
        $this->expireDate = $_expireDate;
    }

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
    protected $addresses;
    protected $dateOfBirth;
    protected $email;
    protected $phone;
}


?>