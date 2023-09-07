<?php

namespace App;

class TextParamHandler extends ParamHandler
{

    public function write():string
    {
        return 'Writing method';
    }

    public function read():string
    {
        return "Read Text";
    }
}