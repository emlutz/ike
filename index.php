<?php

function autoloadFunction($class) {
  $controllersPath = 'controllers/' . $class . '.php';
  $modelsPath = 'models/' . $class . '.php';
  if (file_exists($controllersPath)) {
    include('controllers/' . $class . '.php');
  } else if (file_exists($modelsPath)) {
    include('models/' . $class . '.php');
  }
}
spl_autoload_register("autoloadFunction");

if (isset($_POST["controller"])) {
	$_GET["controller"] = $_POST["controller"];
}
if (isset($_POST["action"])) {
	$_GET["action"] = $_POST["action"];
}

if (isset($_GET["controller"]) &&  isset($_GET["action"])) {
  $controller = $_GET['controller'];
  $action = $_GET['action'];
} else {
  $controller = 'pages';
  $action = 'main';
}

$controller = ucfirst($controller);
$cont = new $controller();

if (method_exists($cont, $action)) {
  $cont->$action();
} else {
  echo "$action not found in $controller";
  die;
}
?>