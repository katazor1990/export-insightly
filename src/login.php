<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;

$client1 = new ApiClient();

$app->get('/login', function(Request $request) {
  $status = $request->get('status', 'unattented');

  $formAuth = new Form('/login');
  $loginInput = new TextElement('login-token', 'Your insightly token');
  $loginSubmit = new SubmitElement('submit');

  $formAuth->addElement($loginInput);
  if ($status === 'failled') {
    $formAuth->addElement(new ParagraphElement('you failled please retry !'));
  }
  $formAuth->addElement($loginSubmit);

  $response = new Response();
  $response->setStatusCode(200,'OK');
  $response->setContent($formAuth->render());
  return $response;
});


$app->post('/login', function(Request $request) use($app, $client1) {

$token = $request->get('login-token', false);

  if($client1->login($token)) {
    return $app->redirect('/home');
  }else {
    return $app->redirect('/login?status=failled');
  }
});
?>
