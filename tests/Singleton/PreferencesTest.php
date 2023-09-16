<?php

namespace Test\Singleton;

use App\Singleton\Preferences;
use PHPUnit\Framework\TestCase;

class PreferencesTest extends TestCase
{

    public function testGetInstance()
    {
        $p1 = Preferences::getInstance();
        $p2 = Preferences::getInstance();

        $this->assertSame($p1, $p2, 'Both instances should be the same');
    }

    public function testSetProperty()
    {
        $p1 = Preferences::getInstance();
        $p1->setProperty('url','www.yahoo.com');
        $expected = 'www.yahoo.com';
        $this->assertSame($expected,$p1->getProperty('url'));
    }

    /*public function testGetProperty()
    {

    }*/
}
