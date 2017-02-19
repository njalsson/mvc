<?php


class Controller
{
    private $model;

    function __construct(Model $model)
    {
        $this->model = $model
    }
}
