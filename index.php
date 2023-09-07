<?php
//Client code
require "vendor/autoload.php";

$simpleProduct = new \App\SimpleProduct();
$simpleProduct->setName('Test simple');
echo $simpleProduct->getName();
//But simple product does not have child products first problem
$simpleProduct->setChildren(1,'dete1',123);
$simpleProduct->setChildren(2,'dete2',1234);
//
//is-a product but it can't be shipped
$downloadableProduct = new \App\DownloadableProduct();
dd($simpleProduct->getChildren());
