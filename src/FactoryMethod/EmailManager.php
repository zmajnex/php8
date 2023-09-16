<?php

namespace App\FactoryMethod;

class EmailManager extends Manager
{
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return "Email title";
    }

    /**
     * @return Encoder
     */
    public function getEncoder(): Encoder
    {
        return new EmailEncoder();
    }
}