<?php


class Controller
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function textclicked()
    {
        $this->model->text = 'text updated';
    }

}
