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
  //   $this->footer = new Footer();
  //   return $this->footer->render();
  // }

  // public function setHeader() {
  //   $this->header = new Header();
  //   return $this->header->render;
  // }

  public function addElement($element) {
    $this->elements[] = $element;
    return $this;
  }

  // public function addForm(Form $form) {
  //   $this->form = $form;
  //   return $form;
  // }

public function addForm() {
  // $form = new Form('test');
  // $select = new SelectElement('test','test');
  // $submit = new SubmitElement('Ok');
  // $form->addElement($select);
  // $form->addElement($submit);
  // return $form->render();
}

  public function render() {
    $home = new HtmlElement('html');

    foreach($this->elements as $e) {
     var_dump($e);
     if(get_class($e) == 'Form') {
       // Form::render($e);
      var_dump($e);
     }else {
        $home->addChild($e->htmlElement());
     }

    }
    return $home->render();
  }

}

?>
