<?php


namespace System\controller;

use System\model\index_model;

class index extends index_model
{
    public function __construct(){


    }

    public function index(){

       $data =  index_model::GetUsers();

       var_dump($data);

    }
}