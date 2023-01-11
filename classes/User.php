<?php
class User
{
    protected $firstName;
    protected $lastName;
    protected $address;
    protected $creditCard;
    protected $coupon;
    protected $products;

    public function __construct($_firstName, $_lastName, $_address, $_creditCard, $_coupon)
    {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->address = $_address;
        $this->creditCard = $_creditCard;
        $this->coupon = $_coupon;
    }

    public function addToCart()
    {
        // code
    }

    public function buy()
    {
        // code
    }
}