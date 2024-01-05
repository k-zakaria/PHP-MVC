<?php
spl_autoload_register(function($classname){
    require "../app/model/".ucfirst($classname).".php";
});

require "config.php";
require "function.php";
require "Database.php";
require "Model.php";
require "Controller.php";
require "Router.php";
require "Request.php";
require "App.php";
?>