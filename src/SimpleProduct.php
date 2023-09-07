<?php

namespace App;

class SimpleProduct extends Product
{
    //Override parent method
public function setChildren(int $id, string $name, int|string $price): void
{
    echo 'Simple does not have children';
}
}