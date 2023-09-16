<?php

namespace App;

abstract class Product
{
    private string $name;

public function __construct(private ShippingStrategy $shippingStrategy)
{
}

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return string
     */
    public function setName($name): string
    {
        return $this->name = $name;
    }

    public function cost()
    {
        return $this->shippingStrategy->cost();
}
}