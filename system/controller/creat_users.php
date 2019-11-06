<?php


namespace System\controller;


use System\model\creat_users_model;

class creat_users extends  creat_users_model
{

    public function __construct()
    {
            $this->data = json_decode(file_get_contents("php://input"));
    }

    public function index(){

        if(creat_users_model::CheckUserExists($this->data) == false){

            echo json_encode(array('message' => "User Exists"));

        }elseif(creat_users_model::CheckUserExists($this->data) == true){


            if(creat_users_model::CreateUser($this->data) == true){

                echo json_encode((array('message' => 'User Added')));

            };

        }

    }

}