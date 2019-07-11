<?php
Class Feed extends Controller {
  public function __construct() {}

  public function main() {
    $this->description = "";
    $this->pageTitle = "Home | ";

    $this->mainBody .= $this->renderView("userForm");
    
    include("views/template.php");
  }

  public function likeitem()
  {

  }

  public function pretrip()
  {
    // this one, we DO care if the user is logged in...
    $this->user = new Users();
    $this->user->checkLoggedIn();
    
  }

  public function posttrip()
  {
    
    
  }
}
?>