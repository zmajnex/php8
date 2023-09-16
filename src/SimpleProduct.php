<?php

namespace App;

class SimpleProduct extends Product
{
    /**
     * @return string
     */
    public function ship():string
    {
        return "Shipping product...";
    }
}