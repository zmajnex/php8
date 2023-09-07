<?php

namespace App;

class XmlParamHandler extends ParamHandler
{

    public function write():string
    {
        return 'Write XML';

    }

    public function read():string
    {
        return $this->params ? "Read params from xml value is {$this->params['price']}" : "No params";
    }
}