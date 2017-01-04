<?php

/**
*
*/
class Store
{

  private $cacheDuration

  function __construct(argument)
  {
    # code...
  }

  public function set($key, $data) {

  }

  public function setJson($key, $data) {

  }

  public function setSession($key, $data) {

  }

  public function get($key) {

  }

  public function getJson($key) {

  }

  public function getSession($key) {

  }

  public function setCacheDuration($cacheDuration) {
    $this->cacheDuration = $cacheDuration;
    return $this;
  }

  public function getCacheDuration() {

  }

  public function loadPost() {

  }
}

?>
