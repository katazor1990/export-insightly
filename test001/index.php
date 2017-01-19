<?php
session_start();

DEFINE('ROOT',__DIR__);

require __DIR__.'/vendor/autoload.php';

use Silex\Application;

$app  = new Application();
$app['debug'] = true;

// User routes
require __DIR__.'/src/routing.php';

$app->run();
?>
