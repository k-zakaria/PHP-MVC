<?php

class Request{

    static public function getPath(){
        return $_REQUEST['url'] ?? '/';
    }

    static public function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
        
    }

}



?>