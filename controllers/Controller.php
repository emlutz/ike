<?php
abstract Class Controller {
  var $mainBody;

  abstract public function main();

  public function renderView($viewName) {
    ob_start();
    include("views/$viewName".".php");
    $html = ob_get_contents();
    ob_clean();
    return $html;
  }
}
?>