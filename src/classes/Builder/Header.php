<?php
/**
*
*/
class Header {

  private $title;

  function __construct($title = 'Exporter-Insightly') {
    $this->title = $title;
  }

  public function htmlElement() {
    return (new HtmlElement('header'))->addChild(
      (new HtmlElement('h1'))->addText(
        $this->title)
      );
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}
