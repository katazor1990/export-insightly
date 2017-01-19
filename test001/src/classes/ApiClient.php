<?php


require 'Store.php';

/**
*
*/
class ApiClient
{
  function __construct() {

  }

  public function login($token) {
    Store::set('token', $token);

    // TODO : real insightly test
    $state = false;
    if ($token === '123')
      $state = true;

    Store::set('user-state', $state);
    // var_dump($state);
    // echo($_SESSION['token']);
    // exit();
    return $state;
  }

}

?>
