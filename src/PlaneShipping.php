<?php

namespace App;

class PlaneShipping extends ShippingStrategy
{
    /**
     * @return int|float
     */
    public function cost():int|float
    {
        return 1000;
    }
}