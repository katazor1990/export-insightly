<?php

/**
*
*/
class Store
{

  private $cacheDuration

  function __construct(argument)
  {

  }

  public function set($key, $data) {
    $this->key = $key;
    $this->data = $data;

  }

  public function setJson($key, $data) {
    $this->key = json_encode($key);
    $this->data = json_encode($data);
  }

  public function setSession($key, $data) {

  }

  public function get($key) {

  }

  public function getJson($key) {
    $this->key = json_decode($key);
    return $this->key;
  }

  public function getSession($key) {

  }

  public function setCacheDuration($cacheDuration) {
    $this->cacheDuration = $cacheDuration;
  }

  public function getCacheDuration() {
    return $this->cacheDuration;
  }

  public function loadPost() {

  }
}

?>
