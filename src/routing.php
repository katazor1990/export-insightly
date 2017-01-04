<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;

require ROOT.'/src/classes/TextElement.php';
require ROOT.'/src/classes/SelectElement.php';
require ROOT.'/src/classes/Form.php';

$app->get('/login', function() {

  $test = new Form('/login');
  $test->addSelectElement('Pipeline-Selector');

  $rep = new Response();
  $rep->setStatusCode(200, 'OK');
  $rep->setContent($test->render());
  return $rep;
});

// $app->get('/login', function() {

//   $loginInput = new TextElement('login-token', 'Your insightly token');

//   $response = new Response();
//   $response->setStatusCode(200,'OK');
//   $response->setContent($loginInput->render());
//   return $response;
// });

// $app->get('/home', function() {

//   $selectInput = new SelectElement('Pipeline-Selector');

//   $rep = new Response();
//   $rep->setStatusCode(200, 'OK');
//   $rep->setContent($selectInput->render());
//   return $rep;

// });

// $app->get('/test' ,function() {

//   $formTest = new Form("Form.php");

//   $element1 = $formTest->addSelectElement('Pipeline-selector');
//   $element2 = $formTest->addTextElement('login-token', 'Your insightly token');

//   $rep1 = new Response();
//   $rep1->setStatusCode(200, 'OK');
//   $rep1->setContent($formTest->render($formTest));

//   return $rep1;

// });

?>
