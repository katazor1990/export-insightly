<?php

/**
*
*/
class TextElement {

  private
   $name,
   $label,
   $type;

  function __construct( $name,  $label,  $type = 'text') {
    $this->name = $name;
    $this->label = $label;
    $this->type = $type;
  }

  public function htmlElement() {
    return (new HtmlElement('div'))->addChild(
      (new HtmlElement('label'))->addProperty('for', $this->name)->addText($this->label)
    )->addChild(
      (new HtmlElement('input', true))->addProperty('name', $this->name)->addProperty('type', $this->type)
    );
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}

?>
