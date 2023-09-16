<?php

namespace App\FactoryMethod;

class SMSManager extends Manager
{
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return 'SMS title';
    }

    /**
     * @return Encoder
     */
    public function getEncoder(): Encoder
    {
        return new SMSEncoder();
    }
}