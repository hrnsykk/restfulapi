<?php


namespace System\model;


use System\config\db;

class creat_users_model extends db
{

    public function CheckUserExists($data){



            $sql = "SELECT users_email FROM users WHERE users_email = :users_email";

            $say = db::conn()->prepare($sql);
            $say->bindValue(':users_email', $data->param->email);
            $say->execute();
            $say->fetchAll(\PDO::FETCH_ASSOC);
            $data = $say->rowCount();

            if($data == 1){

               return false;

            }elseif($data == 0){

                return true;

            }

    }

    public function CreateUser($data){

        try{

            $sql = "INSERT INTO users (users_name, users_surname, users_email, users_password) VALUES (:users_name, :users_surname, :users_email, :users_password)";

            $add = db::conn()->prepare($sql);
            $add->bindValue(':users_name' , $data->param->name);
            $add->bindValue(':users_surname' , $data->param->surname);
            $add->bindValue(':users_email' , $data->param->email);
            $add->bindValue(':users_password' , $data->param->password);

            $add->execute();


            return true;

        }catch (\PDOException $e){

            return $e;
            return false;

        }
    }

}