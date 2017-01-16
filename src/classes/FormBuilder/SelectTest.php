<?php

/**
*
*/
class SelectTest {

  private
    $id,
    // $elements;

  function __construct($id) {
    $this->id = $id;
    // $this->elements = ['Pipeline', 'Stages', 'States'];
  }

  // public function addParts() {
  //   $this->elements = $element;
  //   return $this;
  // }

  // public =function switchType() {

  // }

  // private static function method($key) {
  //   $this->methods = ['Pipeline', 'Stages', 'State'];
  //   $this->elements = [];
  // }

  public function htmlElement() {
    return (new HtmlElement('select'))->addProperty('name', $this->id)->addChild(
      (new HtmlElement('option'))->addProperty('value', 'Pipeline1')->addText('Pipeline1')
        )->addChild(
          (new HtmlElement('option'))->addProperty('value', 'Pipeline2')->addText('Pipeline2')
          )->addChild(
            (new HtmlElement('option'))->addProperty('value', 'Pipeline3')->addText('Pipeline3')
            );
  }

  // public function Selector() {
  //   return (new HtmlElement('select'))->addProperty('name', $this->id)->addChild(
  //     (new HtmlElement('option'))->addProperty('value', 'Pipeline1')->addText('Pipeline1')
  //       )->addChild(
  //         (new HtmlElement('option'))->addProperty('value', 'Pipeline2')->addText('Pipeline2')
  //         )->addChild(
  //           (new HtmlElement('option'))->addProperty('value', 'Pipeline3')->addText('Pipeline3')
  //           );
  // }


  //   public function Stages() {
  //   return (new HtmlElement('select'))->addProperty('name', $this->id)->addChild(
  //     (new HtmlElement('option'))->addProperty('value', 'Pipeline1')->addText('Pipeline1')
  //       )->addChild(
  //         (new HtmlElement('option'))->addProperty('value', 'Pipeline2')->addText('Pipeline2')
  //         )->addChild(
  //           (new HtmlElement('option'))->addProperty('value', 'Pipeline3')->addText('Pipeline3')
  //           );
  // }

  //   public function State() {
  //   return (new HtmlElement('select'))->addProperty('name', $this->id)->addChild(
  //     (new HtmlElement('option'))->addProperty('value', 'Pipeline1')->addText('Pipeline1')
  //       )->addChild(
  //         (new HtmlElement('option'))->addProperty('value', 'Pipeline2')->addText('Pipeline2')
  //         )->addChild(
  //           (new HtmlElement('option'))->addProperty('value', 'Pipeline3')->addText('Pipeline3')
  //           );
  // }

  public function render() {
    return $this->htmlElement()->render();
  }
}

?>
