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


  public function setBody() {
    $body = new Body;
    return $this;
  }

  public function setFooter() {
    $this->footer = new Footer;
    return $this->footer->render();
  }

  public function setHeader() {
    $this->header = new Header;
    return $this->header->render();
  }

  public function addElement($element) {
    $this->elements[] = $element;
    for($i=0; $i<count($this->elements); $i++){
      var_dump($this->elements);
    }
    // exit();
    return $this;
  }

  // public function addForm(Form $form) {
  //   $this->form = $form;
  //   return $form;
  // }

// public function addForm() {
//   $this->form = new Form('test');
//   $select = new SelectElement('test','test');
//   $submit = new SubmitElement('Ok');
//   $this->form->addElement($select);
//   $this->form->addElement($submit);
//   // var_dump($this->form);
//   return $this->form->addElement($this);
// }

//   public function render() {
//     $home = new HtmlElement('html');

//     // foreach($this->elements as $e) {
//     //  var_dump($e);
//     //  if(get_class($e) == 'Form') {
//     //    // Form::render($e);
//     //   var_dump($e);
//     //  }else {
//     //     $home->addChild($e->htmlElement());
//     //  }
//      foreach($this->elements as $key => $value) {
//        // foreach ($value as $val) {
//         // var_dump($val);
//          $home->addChild($value->htmlElement());
//        // }
//      }
//     return $home->render();
//   }


  public function render() {
    $html = new HtmlElement('html');
    $this->setHeader();
    $this->setBody();
    $this->setFooter();

   return $html->render();
  }
 }

?>
