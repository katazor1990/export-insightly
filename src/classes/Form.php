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
    $methode;

  public function __construct($action, $methode = "POST") {
    $this->setAction($action);
    $this->setMethode($methode);
    $this->elements = [];
  }

  public   function addSelectElement () {
    $selectElement = new SelectElement($id);
    $this->addElement($selectElement);
    return $this;
  }

  public   function addTextElement($id, $label) {
    $textElement = new TextElement($id, $label);
    $this->addElement($TextElement);
    return $this;
  }

/*Not Finish /!\ */
  public   function addElement($element) {
    $this->elements[] = $element;
    return ;
  }

  public   function setAction($action) {
    $this->action = $action;
    return $this;
  }

  public   function setMethode($methode) {
    $this->methode = $methode;
    return $this;
  }

public     function render() {
    return $this-> ;
  }
}

?>
