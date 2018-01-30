<?php

include "HelloWorldView.php";
include "HelloWorldModel.php";
include "HelloWorldController.php";

$model = new HelloWorldModel();
$controller = new HelloWorldController($model);
$view = new HelloWorldView($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
  $controller->{$_GET['action']}();
}

echo $view->output();
