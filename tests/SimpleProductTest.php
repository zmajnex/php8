<?php

namespace Test;

use App\SimpleProduct;
use App\TrainShipping;
use PHPUnit\Framework\TestCase;

class SimpleProductTest extends TestCase
{
    public function test_cost()
    {
        $trainShippingMock = $this->getMockBuilder(TrainShipping::class)->getMock();
        $trainShippingMock->method('cost')->willReturn(100);

        $simpleProduct = new SimpleProduct($trainShippingMock);
        $result = $simpleProduct->cost();
        $expected = 100;
        $this->assertSame($expected,$result);
  }
}
