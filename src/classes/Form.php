<?php

require_once 'HtmlElement.php';

/**
*
*/
class From
{
  private
    $elements,
    $action,
    $methode = "POST";

  function __construct(action, methode) {
    $this->setAction($action);
    $this->methode  = $methode;
    $this->elements = [];
  }

  function addElement() {

  }
}

?>
