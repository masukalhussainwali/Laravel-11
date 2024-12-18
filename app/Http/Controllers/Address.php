<?php

use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Dumpable;

class Address
{
    use Conditionable, Dumpable;

    public $street;
    public $city;

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
}

$address = new Address;

// Debug at intermediate steps
$address->setStreet('123 Main St')->setCity('New York');
