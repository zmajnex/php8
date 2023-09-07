<?php

namespace App;

class Product
{
    private string $name;
    private array $children = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return string
     */
    public function setName($name): string
    {
        return $this->name = $name;
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

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

    public function download()
    {
        return "Downloading product...";
    }

    public function ship()
    {
        return "Shipping product...";
    }
}