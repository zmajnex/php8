<?php

namespace App;

abstract class ParamHandler
{
    protected array $params = [];
    protected string $source;
    public function __construct($source)
    {
        $this->source = $source;
    }

    public function addParams(string $key, string $value):void
    {
     $this->params[$key] = $value;
    }
    public function getAllParams():array
    {
        return $this->params;
    }
    public static function getInstance(string $filename):ParamHandler
    {
        if(preg_match("/\.xml$/i", $filename)){
            return new XmlParamHandler($filename);
        }
        return new TextParamHandler($filename);
    }
    abstract public function write();
    abstract public function read();
}