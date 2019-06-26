<?php
Class Pages extends Controller {
  public function __construct() {}

  public function main() {
    $this->description = "";
    $this->pageTitle = "Home | ";

    $this->mainBody .= $this->renderView("home");

    include("views/template.php");
  }
}
?>