<?php

namespace App\FactoryMethod;

class SMSEncoder extends Encoder
{
    /**
     * @return string
     */
    public function encode(): string
    {
       return 'SMS encoded';
    }
}