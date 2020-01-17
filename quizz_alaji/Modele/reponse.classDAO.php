<?php

require_once "../db/db_connect.php";

class ReponseDAO extends DbConnect
{

    public function __construct()
    {
        parent::connect();
    }

    public function getAllReponses()
    {
        $sql = "SELECT * from reponses";
        $results = parent::executeQuery($sql);
        return $results->fetchAll();
    }
}
