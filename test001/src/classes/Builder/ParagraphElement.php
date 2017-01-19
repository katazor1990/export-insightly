<?php

/**
*
*/
class ParagraphElement {

  private $text;

  function __construct($text) {
    $this->text = $text;
  }

  public function htmlElement() {
    return (new HtmlElement('div'))->addChild(
      (new HtmlElement('p'))->addText($this->text)
      );
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}

?>
