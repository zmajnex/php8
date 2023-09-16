<?php

namespace App;

class ConfigurableProduct extends Product
{
    private array $children = [];
    /**
     * @param int $id
     * @param string $name
     * @param int|string $price
     */
    public function setChildren(int $id, string $name, int|string $price): void
    {
        $this->children[] = [
            "id"=>$id,
            "name"=>$name,
            "price"=>$price
        ];
    }
    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }
    }