<?php
//Client code
require "vendor/autoload.php";

/*$simpleProduct = new \App\SimpleProduct();
$simpleProduct->setName('Test simple');
echo $simpleProduct->getName();
//But simple product does not have child products first problem
$simpleProduct->setChildren(1,'child_one',123);
$simpleProduct->setChildren(2,child_two',1234);
//
//is-a product but it can't be shipped
$downloadableProduct = new \App\DownloadableProduct();
dd($simpleProduct->getChildren());*/
//Strategy
$simple = new \App\SimpleProduct(new \App\TrainShipping());
echo $simple->cost();
$simplePlane = new \App\SimpleProduct(new \App\PlaneShipping());
echo  $simplePlane->cost();

$downloadable = new \App\DownloadableProduct();
$downloadable->setName('PDF Book');
echo $downloadable->cost();