<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Membership.php';

class PremiumUser extends User {

    public $membership;

    public function __construct($_name, $_lastname, Membership $_membership)
    {
        parent::__construct($_name, $_lastname);
        $this->membership = $_membership;
    }

    //polimorfismo
    public function setDiscount()
    {
        if ($this->getAge() < 30 ) {
            $this->discount = 50;
        } else {
            $this->discount = 0;
        }
    }

}