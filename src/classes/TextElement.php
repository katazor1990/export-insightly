<?php

require_once 'HtmlElement.php';

/**
*
*/
class TextElement {

  private
   $id,
   $label,
   $type;

  function __construct(String $id, String $label, String $type = 'text') {
    $this->id = $id;
    $this->label = $label;
    $this->type = $type;
  }

  public function htmlElement() {
    return (new HtmlElement('div'))->addChild(
      (new HtmlElement('label'))->addProperty('for', $this->id)->addText($this->label)
    )->addChild(
      (new HtmlElement('input', true))->addProperty('id', $this->id)->addProperty('type', $this->type)
    );
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}

class SelectElement {

  private
    $id,
    $option;

  function __construct(String $id, Srting $option) {
    $this->$id = $id;
    $this->$option = $option;
  }

    public function htmlSelect


}

?>
