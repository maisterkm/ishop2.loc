<?php


namespace ishop\base;


use ishop\TSinglton;

class Db
{
    use TSinglton;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
    }
}