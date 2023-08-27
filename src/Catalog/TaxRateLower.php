<?php

namespace App\Catalog;

class TaxRateLower implements TaxRateInterface
{
protected $taxRate = 0.15;

    /**
     * @return mixed
     */
    public function getTaxRate():float
    {
        return $this->taxRate;
    }
}