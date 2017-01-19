<?php

/**
*
*/
class Home {

  function __construct() {
    // $this->setHeader($header);
    // $this->setFooter($footer);
    // $this->setBody($body);
  }


  // public function setBody() {
  //   $body = new HtmlElement('body');
  //   return $this;
  // }

  // public function setFooter() {
  //   $footer = new Footer();
  //   return $this->addElement($footer);
  // }

  // public function setHeader() {
  //   $header = new Header();
  //   return $this->addElement($header);
  // }

  public function addElement($element) {
    $this->elements[] = $element;
    return $this;
  }

  public function addForm(Form $form) {
    $this->form = $form;
    return $form->render();
  }

  public function render() {
    // $home = new Home();
    // $home->setBody();
    //     var_dump($home);
    // exit();

    $body = new HtmlElement('body')

    foreach($this->elements as $e) {
      $this->body->addChild($e->htmlElement());
    }
    return $home->render();
  }

}

?>
