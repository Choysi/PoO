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

    public function getReponseByQuestion($id_question)
    {
        $sql = "SELECT * FROM reponses WHERE idquestion = :idq";
        $params = array(
            "idq" => $id_question
        );
        $results = parent::executeQuery($sql,$params);
        return $results->fetchAll();
    }
}
