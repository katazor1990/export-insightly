<?php

/**
*
*/
class Home {

  function __construct() {
    $this->header = setHeader();
    $this->footer = setFooter();
    $this->body = setBody();
  }


  public function setBody() {
    $body = new HtmlElement('body');
    return $this->$body;
  }

  public function setFooter() {
    $footer = new Footer();
    return $this->addElement($footer);
  }

  public function setHeader() {
    $header = new Header();
    return $this->addElement($header);
  }

  public function addForm() {
    $this->form = $form;
    return $form->render();
  }

  public function render() {
    $home = new Home();
    $home->setBody();

    foreach($this->elements as $e) {
      $body->addChild($e->htmlElement());
    }
    return $home->render();
  }

}

?>
