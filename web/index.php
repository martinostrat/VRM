<?php 
// web/index.php
// using silex framework
require_once __DIR__.'/../vendor/autoload.php';

use BookingApp\Application;

$app = new Application();

$app->run(); 


?>