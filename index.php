<?php
session_start();

DEFINE('ROOT',__DIR__);

require __DIR__.'/vendor/autoload.php';

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app  = new Silex\Application();
$app['debug'] = true;

// User routes
require __DIR__.'/src/routing.php';

$app->run();
?>
