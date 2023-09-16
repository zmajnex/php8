<?php

namespace App;

class TrainShipping extends ShippingStrategy
{
    /**
     * @return int|float
     */
    public function cost():int|float
    {
        return 500;
    }
}