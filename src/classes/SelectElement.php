<?php

require_once 'HtmlElement.php';

/**
*
*/
class SelectElement {

  private $id;

  function __construct(String $id) {
    $this->id = $id;
  }

  public function htmlElement() {
    return (new HtmlElement('div'))->addChild(
      (new HtmlElement('select'))->addProperty('id', $this->id)->addProperty('name', $this->name)
      )->addChild(
        (new HtmlElement('option')->addProperty('value', 'Pipeline1')->addText('Pipeline1'))
        )->addChild(
          (new HtmlElement('option')->addProperty('value', 'Pipeline2')->addText('Pipeline2')
          ))->addChild(
            (new HtmlElement('option')->addProperty('value', 'Pipeline3')->addText('Pipeline3'))
            );
  }

  public function render() {
    return $this->htmlElement()->render();
  }
}

?>
