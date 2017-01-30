<?php
/**
*
*/
class Body {

  function __construct() {}

  public function htmlElement() {
    return (new HtmlElement('body'));
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}
