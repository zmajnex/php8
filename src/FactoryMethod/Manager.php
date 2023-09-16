<?php

namespace App\FactoryMethod;

abstract class Manager
{
    abstract public function getTitle():string;
    abstract public function getEncoder():Encoder;

}