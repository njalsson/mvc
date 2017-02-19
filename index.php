<?php

// getting code from other files
require_once('Data/data.php');
require_once('Controller/controller.php');
require_once('Model/model.php');
require_once('View/view.php');
//main thing
$model        = new Model();
$controller   = new Controller($model);
$view         = new View($model);
if(isset($_GET['action'])) $controller->{$_GET['action']}();
echo $view->output();
