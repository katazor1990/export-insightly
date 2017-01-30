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
    for($i=0; $i<count($this->elements); $i++){
      // var_dump($this->elements);
      // echo '</br>';
    }
    // exit();
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

  public function render() {
    $formHtml = new HtmlElement('form');

    $formHtml->addProperty('method', "POST");
    $formHtml->addProperty('action', "/login");

      foreach ($this->elements as $key => $value) {
        $formHtml->addChild($value->htmlElement());
      }
    return $formHtml->render();
  }
}


    //  if(is_array($elements)){
    //   foreach ($elements as $key => $value) {
    //     $formHtml->addChild($key->htmlElement());
    //   }
    // } else{
    //   echo "Not an array";
    // }
?>
