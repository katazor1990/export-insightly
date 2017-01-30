<?php
/**
*
*/
class Footer {

  private $text;

  function __construct($text = 'All Rights Reserved At Matlo.') {
    $this->text = $text;
  }

  public function htmlElement() {
    return (new HtmlElement('footer'))->addChild(
      (new HtmlElement('p'))->addText(
        $this->text)
      );
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}
