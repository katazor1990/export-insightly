<?php

  /**
  *
  */
  class Home{

    function __construct(argument) {}
  }

  public function setHeader($title) {
    return (new HtmlElement('header')->addChild(
      (new HtmlElement('h1'))->addText($this->title)
      )
    );
  }

  public function setFooter($title) {
    return (new HtmlElement('footer')->addChild(
      (new HtmlElement('p'))->addText($this->title)
      )
    );
  }

  public function setBody() {

  }

  public function addElement($elements) {
    $this->elements[] = $element;
    return $element;

  }
?>
