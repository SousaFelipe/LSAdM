<?php
namespace App\Repository;


class Repository
{
    private static $instance = null;



    protected static function bind($class)
    {
        static::$instance = new $class;
        return static::$instance;
    }
}
