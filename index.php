<?php
//Client code
use App\Singleton\Preferences;

require "vendor/autoload.php";

$p = Preferences::getInstance();
$p->setProperty('url', 'www.google.com');
echo $p->getProperty('url').PHP_EOL;
$p1 = Preferences::getInstance();
echo $p1->getProperty('url').PHP_EOL;
$p1->setProperty('name','Mike');
echo $p1->getProperty('name').PHP_EOL;