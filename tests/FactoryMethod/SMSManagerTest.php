<?php

namespace Test\FactoryMethod;

use App\FactoryMethod\SMSEncoder;
use App\FactoryMethod\SMSManager;
use PHPUnit\Framework\TestCase;

class SMSManagerTest extends TestCase
{

    public function testGetTitle()
    {
       $manager = new SMSManager();
       $exp = 'SMS title';
       $res = $manager->getTitle();
       $this->assertSame($exp,$res);
    }

    public function testGetEncoder()
    {
     $smsManager = new SMSManager();
     $encoder = $smsManager->getEncoder();
     $this->assertInstanceOf(SMSEncoder::class,$encoder);
    }
}
