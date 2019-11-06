<?php

namespace System\model;
use System\config\db;
use \PDO;

class  index_model  extends db {

    public function GetUsers(){

        $sql = "SELECT * FROM users";

        $select = db::conn()->prepare($sql);
        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);

    }

}