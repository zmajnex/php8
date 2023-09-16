<?php

namespace App\FactoryMethod;

class EmailEncoder extends Encoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
        return 'Email encoded';
    }
}