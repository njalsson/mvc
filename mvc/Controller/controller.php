<?php


class Controller
{
    //variables
    private $model;

    private $author;
    private $isbn;
    private $pubisher;
    private $lang;


    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function textclicked($author, $isbn, $publisher, $lang)
    {
        $this->model->text ='Author -> ' . $author . '<br> ISBN-10 -> ' . $isbn . '<br> Publisher -> ' . $publisher . ' <br> Language -> ' . $lang;
    }

}
