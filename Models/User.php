<?php

class User {

    public $name;
    public $lastname;
    protected $discount = 0;
    private $age;

    public function __construct($_name, $_lastname)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    /*
    public function getName() {
        return $this->name;
    }
    public function setName($_name) {
        $this->name = $_name;
    }
    */

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setDiscount() {
        if ($this->age > 65) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }   

    public function getDiscount() {
        return $this->discount;
    }
    
}