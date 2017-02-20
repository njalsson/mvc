<?php

class View
{
    public $model;
    function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function output()
    {
        return '<a href="index.php?action=textclicked&book=The Hobbit">The Hobbit </a>  <br>
                <a href="index.php?action=textclicked&book=1984"> 1984 </a>  <br>
                <a href="index.php?action=textclicked&book=Eloquent JavaScript"> Eloquent JavaScript </a>  <br>
                ' . $this->model->text;
    }
}
