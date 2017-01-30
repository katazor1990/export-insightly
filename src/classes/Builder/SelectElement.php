<?php
/**
*
*/
class SelectElement {
  private
   $id,
   $value;

  function __construct($id, $value) {
    $this->id = $id;
    $this->value = $value;
  }
  public function htmlElement() {
    return (new HtmlElement('select'))->addProperty('name', $this->id)->addChild(
      (new HtmlElement('option'))->addProperty('value', $this->value.'1')->addText($this->value.'1')
        )->addChild(
          (new HtmlElement('option'))->addProperty('value', $this->value.'2')->addText($this->value.'2')
          )->addChild(
            (new HtmlElement('option'))->addProperty('value', $this->value.'3')->addText($this->value.'3')
            );
  }
  public function render() {
    return $this->htmlElement()->render();
  }
}
