<?php

/**
*
*/
class SubmitElement {

  private
   $id,
   $type;

  function __construct( $id,  $type = 'submit') {
    $this->id = $id;
    $this->type = $type;
  }

  public function htmlElement() {
    return (new HtmlElement('div'))->addChild(
      (new HtmlElement('input', true))->addProperty('id', $this->id)->addProperty('type', $this->type)
    );
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}

?>
