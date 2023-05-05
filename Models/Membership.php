<?php

class Membership {

    public $name;
    public $price;
    public $start_date;

    public function __construct($_name, $_price, $_start_date)
    {
        $this->name = $_name;
        $this->price = $_price;   
        $this->start_date = $_start_date;
    }

    public function getMembershipDetails() {
        return "Name: $this->name - Price: $this->price - Start Date: $this->start_date";
    }

}