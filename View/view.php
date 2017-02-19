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
        return '<a href="index.php?action=textclicked">' . $this->model->text;
    }
}
