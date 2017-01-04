<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;

require ROOT.'/src/classes/TextElement.php';
require ROOT.'/src/classes/SelectElement.php';

$app->get('/login', function() {

  $loginInput = new TextElement('login-token', 'Your insightly token');

  $response = new Response();
  $response->setStatusCode(200,'OK');
  $response->setContent($loginInput->render());
  return $response;
});

$app->get('/home', function() {

  $selectInput = new SelectElement('Pipeline-Selector');

  $rep = new Response();
  $rep->setStatusCode(200, 'OK');
  $rep->setContent($selectInput->render());
  return $rep;

});

?>
