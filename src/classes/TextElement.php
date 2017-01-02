<?php

/**
*
*/
class HtmlElement {
  private
    $name,
    $selfClose,
    $children,
    $properties;

  function __construct(String $name, Bool $selfClose = false) {
    $this->name = $name;
    $this->selfClose = $selfClose;
    $this->children = array();
    $this->properties = array();
  }

  public function getName() {
    return $this->name;
  }

  public function addChild(HtmlElement $child) {
    array_push($this->children, $child);
    return $this;
  }

  public function addText(String $child) {
    array_push($this->children, $child);
    return $this;
  }

  public function addProperty(String $key,String $value) {
    $this->properties[$key] = $value;
    return $this;
  }

  public function render() {
    $html = '<'.$this->name;

    foreach ($this->properties as $key => $value) {
      $html .= ' '.$key.'="'.$value.'"';
    }

    if ($this->selfClose) {
      $html .= '/>';
    }
    else {
      $html .= '>';

      foreach ($this->children as $child) {
        if (gettype($child) == 'object')
          $html .= $child->render();
        else
          $html .= $child;
      }

     $html .= '</'.$this->name.'>';
    }

    return $html;
  }
}

/**
*
*/
class TextElement
{
  private $id;
  private $label;
  private $type;

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

?>
