<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;

require ROOT.'/src/classes/TextElement.php';

$app->get('/login', function() {

  $loginInput = new TextElement('login-token', 'Your insightly token');

  $response = new Response();
  $response->setStatusCode(200,'OK');
  $response->setContent($loginInput->render());
  return $response;
});

?>
