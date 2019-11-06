<?php

namespace System\config;
use \PDO;


class db extends \PDO
{

    public $database    =   "localhost";
    public $username    =   "root";
    public $password    =   "";


    public function conn(){

        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "test";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
        ];


        try {

            return new PDO("mysql:host=$host; dbname=$dbname", $user, $password, $options);

        } catch(PDOException $e) {

            die("Database connection failed: " . $e->getMessage());

        }

    }


}