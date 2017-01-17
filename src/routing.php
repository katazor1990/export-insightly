<?php

session_start();

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Form\Extension\Core\Type\FormType;
// use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
// use Silex\Provider\FormServiceProvider;

require ROOT.'/src/classes/FormBuilder/FormBuilder.php';

require ROOT.'/src/classes/ApiClient.php';

// require ROOT.'/src/classes/home.php';

// require ROOT.'/src/classes/FormBuilder/SelectTest.php';

require ROOT.'/src/login.php';

// //////////////////////////    TEST WITH APICLIENT CLASS   ///////////////////

$client1 = new ApiClient();
// $formFilter = new Form();


// $app->get('/home', function() {
//   $formFiltre = new Form('/test/apiInsightlyRoute');
//   $selectorTest = new SelectTest('selectorTest');
//   $selectSubmit = new SubmitElement('Go');

//   $formFiltre->addElement($selectorTest->);
//   $formFiltre->addElement($selectSubmit);

//   $response = new Response;
//   $response->setStatusCode(200,'OK');
//   $response->setContent($formFiltre->render());


//   $repTest = new Response;
//   $repTest->setContent($formFiltre->render());

//   return $response;
// });

// $app->get('/home', function() {
//   $home = new Home();
//   $home->setHeader('Exporter-Insightly')
//   $formFiltre = new Form('/home');
//   $selectorTest = new SelectElement('selectorTest', 'pipeline');
//   $selectSubmit = new SubmitElement('Go');

//   $formFiltre->addElement($selectorTest);
//   if ($status === 'failled') {
//     $formFiltre->addElement(new ParagraphElement('you failled please retry !'));
//   }
//   $formFiltre->addElement($selectSubmit);

//   $response = new Response;
//   $response->setStatusCode(200,'OK');
//   $response->setContent($formFiltre->render());

//   return $response;
// });

// $app->post('/home', function(Request $request) use($app){

//   $formFiltre = new Form('/stage');
//   $selectorTest2 = new SelectElement('selectorTest2', 'stage');
//   $selectSubmit = new SubmitElement('Go');

//   $formFiltre->addElement($selectorTest2);

//   if($_POST['selectorTest']){
//     $redirect = $app->redirect('/home');
//     $selectorTest = new SelectElement('selectorTest2', 'stage');
//     $selectSubmit = new SubmitElement('Go');

//     $formFiltre->addElement($selectorTest2);
//     $formFiltre->addElement($selectSubmit);

//     $response = new Response;
//     $response->setStatusCode(200,'OK');
//     // $response->setContent($redirect);

//   return $redirect;

//   }else {
//     $formFiltre->addElement(new ParagraphElement('Please select an Element !'));
//     return $app->redirect('/home?status=failled');
//   }
// });

$app->post('/stage', function(Request $request) use($app, $client1){

  $formFiltre = new Form('/state');
  $selectorTest = new SelectElement('selectorTest', 'state');
  $selectSubmit = new SubmitElement('Go');

  $formFiltre->addElement($selectorTest);

  if($_POST['selectorTest']){
    return $app->redirect('/state');
  }else {
    $formFiltre->addElement(new ParagraphElement('Please select an Element!'));
    return $app->redirect('/home?status=failled');
  }
});

// $app->post('/state', function(Request $request) use($app, $client1){

//   $formFiltre = new Form('/state');
//   $selectorTest = new SelectElement('selectorTest', 'pipeline');
//   $selectSubmit = new SubmitElement('Go');


//   if($_POST['selectorTest']){
//     return $app->redirect('/state');
//   }else {
//     return $app->redirect('/home?status=failled');
//   }
// });

////////////////////////////////////////////////////////////////////////////////

//////   TEST HOME CREATE WITH CLASS    /////////


$app->get('/home', function() {

  $home = new Home();
  $form = new Form('Haute-Form');
  $select = new SelectElement('Select', 'Pipeline');
  $submit = new SubmitElement('Submit');

  $form->addElement($select);
  $form->addElement($submit);
  $home->addForm($form);
   var_dump($home);
 exit();

  // $home->setHeader();
  // $home->setFooter();

 $response = new Response;
 $response->setStatusCode(200, 'Ok');
 $response->setContent($home->render());


 return $response;
});

?>
