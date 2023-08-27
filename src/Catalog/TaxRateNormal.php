<?php

namespace App\Catalog;

class TaxRateNormal implements TaxRateInterface
{
protected $taxRate = 0.2;

    /**
     * @return mixed
     */
    public function getTaxRate():float
    {
        return $this->taxRate;
    }
}