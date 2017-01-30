<?php

session_start();

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Form\Extension\Core\Type\FormType;
// use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
// use Silex\Provider\FormServiceProvider;

require ROOT.'/src/classes/Builder/FormBuilder.php';

require ROOT.'/src/classes/ApiClient.php';

// require ROOT.'/src/classes/home.php';

// require ROOT.'/src/classes/FormBuilder/SelectTest.php';

require ROOT.'/src/login.php';

///////////////////////////  GET ROAD /////////////////////////////////////

$app->get('/login', function() {

});

$app->get('/data', function() {

});

$app->get('/home', function() {

});

///////////////////////////////////////////////////////////////////////////

/////////////////////////// POST ROAD /////////////////////////////////////

$app->post('/login', function() {

});

$app->post('/data', function() {

});

$app->post('/home', function() {

});

///////////////////////////////////////////////////////////////////////////
?>
