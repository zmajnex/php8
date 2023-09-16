<?php
//Client code
use App\FactoryMethod\Manager;
use App\Singleton\Preferences;

require "vendor/autoload.php";
// Singleton
/*$p = Preferences::getInstance();
$p->setProperty('url', 'www.google.com');
echo $p->getProperty('url').PHP_EOL;
$p1 = Preferences::getInstance();
echo $p1->getProperty('url').PHP_EOL;
$p1->setProperty('name','Mike');
echo $p1->getProperty('name').PHP_EOL;*/
// Factory Method
$smsManager = new \App\FactoryMethod\SMSManager();
echo $smsManager->getTitle().PHP_EOL;
echo $smsManager->getEncoder()->encode();