<?php

namespace Test\Catalog;

use App\Catalog\Product;
use App\Catalog\TaxRateNormal;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    protected object $product;
    protected string $productName = "Sample Product";
    protected float $productPrice = 50.99;
    protected object $taxRate;

    public function setUp(): void
    {
        $this->product = new Product($this->productName, new TaxRateNormal());
    }

    public function test_constructor()
    {
        $this->assertInstanceOf(Product::class, $this->product);
    }

    public function test_get_product_name()
    {
        $name = $this->product->getName();
        $this->assertSame($this->productName, $name);
    }
    public function test_set_product_name()
    {

        $this->product->setName('Pants');
        $name = $this->product->getName();
        $this->assertSame('Pants', $name);
    }
  /**
 * @return object
 */
    public function test_get_final_price():void
    {
        $taxRate = 120.0;
        $this->product->setPrice(100);
        $finalPrice = $this->product->getFinalPrice();
        $this->assertSame($taxRate,$finalPrice);
    }
}
