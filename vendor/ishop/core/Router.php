<?php


namespace ishop;


class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispatch($url)
    {
        if (self::matchRout($url)) {
            echo 'OK';
        } else {
            echo 'NO';
        }
    }

    public static function matchRout($url)
    {
        return true;
    }

}