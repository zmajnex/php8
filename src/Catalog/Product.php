<?php

namespace App\Catalog;

class Product
{
    protected $name;
    protected $price;
    protected $taxRate;
    public function __construct($name,TaxRateInterface $taxRate )
    {
        $this->name = $name;
        $this->taxRate = $taxRate;
    }

    public function getName():string
    {
        return $this->name;
}

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    public function getFinalPrice():float
    {

        return  $this->price + $this->price * $this->taxRate->getTaxRate();
    }
}