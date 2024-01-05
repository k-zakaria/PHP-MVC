<?php
class Router {
    static private $routes = [];

    static public function get($path, $callback){
        if (is_array($callback))
        self::$routes['get'][$path]=$callback;
    }

    static public function post($path, $callback){
        if (is_array($callback))
        self::$routes['post'][$path]=$callback;
    }
    
    static public function getroutes(){
        return self::$routes;
    }

    static public function getCallback(){ 
        $path= Request::getPath();
        $method = strtolower(Request::getMethod());
        return self::$routes[$method][$path];
    }
}