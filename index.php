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

//check if to change text
if(isset($_GET['action'])){
    $currentbook = $_GET['book'];
    //data on the book
    $author    = $books[$currentbook]['Author'];
    $isbn      = $books[$currentbook]['ISBN-10'];
    $publisher = $books[$currentbook]['Publisher'];
    $lang      = $books[$currentbook]['Language'];
    //call function to change text
    $controller->{$_GET['action']}($author, $isbn, $publisher, $lang);
}
echo $view->output();
