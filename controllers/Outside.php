<?php
Class Outside extends Controller {
  public function __construct() {}

  public function main() {
    
    $this->description = "";
    $this->pageTitle = "Home | ";

    $this->mainBody .= $this->renderView("out_head");
    $this->mainBody .= $this->renderView("userForm");
    $this->mainBody .= $this->renderView("modal");
    // $this->mainBody .= $this->renderView("home");

    include("views/out_template.php");
  }

  public function login() {
    Users::checkUser();
  }

  public function userProfile() {
    Users::saveUser();

  }

  public function pretrip()
  {
    // this one, we dont care if the user is logged in...
    $this->user = new Users();
  }

  public function posttrip()
  {

  }
}
?>