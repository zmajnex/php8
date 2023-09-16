<?php

namespace App;

abstract class ShippingStrategy
{
abstract public function cost();
}