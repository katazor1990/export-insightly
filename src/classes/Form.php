<?php

require_once 'HtmlElement.php';

/**
*
*/
class Form {
  private
    $elements,
    $action,
    $methode;

  public  function __construct($action, $methode = "POST") {
    $this->setAction($action);
    $this->setMethode($methode);
    $this->elements = [];
  }

  public  function addSelectElement ($id) {
    $selectElement = new SelectElement($id);
    $this->addElement($selectElement);
    return $this;
  }

  public  function addTextElement($id, $label) {
    $textElement = new TextElement($id, $label);
    $this->addElement($TextElement);
    return $this;
  }

/*Not Finish /!\ */
  public  function addElement($elements) {
    foreach($this->elements as $element)
      $element->render();

    // $this->elements[] = $element;
    // $element->render($this);
  }

  public  function setAction($action) {
    $this->action = $action;
    return $this;
  }

  public  function setMethode($methode) {
    $this->methode = $methode;
    return $this;
  }

  public  function render() {
    return $this->addElement();
  }
}

?>
