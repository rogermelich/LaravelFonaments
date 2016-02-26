<?php

namespace App\Veicle;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 26/02/16
 * Time: 20:04
 */
class Jeep
{
    public function __construct(Fuel $fuel)
    {
        $this->fuel = $fuel;
    }

    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}