<?php
//Client code
require "vendor/autoload.php";


$xml = \App\ParamHandler::getInstance('param.xml');
$xml->addParams('price','$234');
$params = $xml->getAllParams();
$txt = \App\ParamHandler::getInstance('params.txt');
$txt->addParams('text price', '$100');
$textParams =$txt->getAllParams();
dd($params, $xml->read(), $textParams);