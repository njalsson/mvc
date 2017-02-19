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
        return '<h1>' . $this->model->text . '</h1>';
    }
}
