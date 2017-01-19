<?php

/**
*
*/
class Form {
  private
    $elements,
    $action,
    $method;

  public function __construct($action, $method = "POST") {
    // $this->setAction($action);
    // $this->setAction($action);
    // $this->setMethode($method);
    $this->elements = [];
/*    $this->setElement();*/
/*    $this->setSubmit($submit);*/
  }

  // public  function addSelectElement ($id) {
  //   $selectElement = new SelectElement($id);
  //   $this->addElement($selectElement);
  //   return $this;
  // }

  // public  function addTextElement($id, $label) {
  //   $textElement = new TextElement($id, $label);
  //   $this->addElement($textElement);
  //   return $this;
  // }

/*Not Finish /!\ */
  public function addElement($element) {
    $this->elements[] = $element;
      return $this;
  }

  // public function setAction($action) {
  //   $this->action = $action;
  //   return $this;
  // }

  // public function setMethode($method) {
  //   $this->method = $method;
  //   return $this;
  // }

  // public function setSubmit($id, $label) {
  //   $submit = new TextElement($id, $label);
  //   $this->addElement($submit);
  //   return $this;
  // }

  public static function render() {
    $formHtml = new HtmlElement('form');

    $formHtml->addProperty('method', $this->method);
    $formHtml->addProperty('action', $this->action);

    foreach ($this->elements as $elem) {
      $formHtml->addChild($elem->htmlElement());
    }

    return $formHtml->render();
  }
}

?>
