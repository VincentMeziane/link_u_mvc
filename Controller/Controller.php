<?php

abstract class Controller
{
    // Objects
    protected $view;
    protected $model;
    protected $paramPost;
    protected $paramGet;
    

    public function __construct()
    {
        $this->paramGet = $_GET ?? array("page"=>"tickets", "action"=>"list");
        $this->paramPost = $_POST ?? array("page"=>"tickets", "action"=>"list");
    }
}