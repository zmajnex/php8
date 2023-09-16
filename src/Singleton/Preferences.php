<?php

namespace App\Singleton;

class Preferences
{
    private static Preferences $instance;
    private array $props = [];


    public function __construct()
    {
    }

    public static function getInstance(): Preferences
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setProperty(string $key, string $value):void
    {
      $this->props[$key] = $value;
    }

    /**
     * @param string $key
     * @return string
     */
    public function getProperty(string $key):string
    {
        return $this->props[$key];
    }
}