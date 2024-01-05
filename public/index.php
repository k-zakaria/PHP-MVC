<?php

session_start();
require "../app/core/init.php";
require "../app/controllers/HomeController.php";

$app = new App();
Router::get('home',[HomeController::class, 'index']);
Router::post('home',[HomeController::class, 'index']);
Router::get('login',[HomeController::class, 'test']);
Router::post('login',[HomeController::class, 'index']);
$app->run();
 
?>