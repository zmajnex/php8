<?php
//Client code
require "vendor/autoload.php";

use App\Catalog\Product;
use App\Catalog\TaxRateLower;
use App\Catalog\TaxRateNormal;

$product = new Product('T-shirt', new TaxRateNormal());
$product->setPrice(100);
$price = $product->getFinalPrice();

$productSecond =  new Product('Book', new TaxRateLower());
$productSecond->setPrice(100);
$lowerPrice = $productSecond->getFinalPrice();
dd($price,$lowerPrice);
