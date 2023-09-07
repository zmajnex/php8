<?php

namespace Test;

use App\TextParamHandler;
use PHPUnit\Framework\TestCase;

class TestTextParamHandler extends TestCase
{
    public function test_writing_method()
    {
    $handler = new TextParamHandler('test.txt');
    $result = $handler->write();
    $expected = 'Writing method';
    $this->assertEquals($expected,$result);
    }
}
