<?php

require_once "../db/db_connect.php";

class QuestionDAO extends DbConnect
{

    public function __construct()
    {
        parent::connect();
    }

    public function getAllQuestions()
    {
        $sql = "SELECT * from questions";
        $results = parent::executeQuery($sql);
        return $results->fetchAll();
    }

    public function getQuestionByCategorie($paramCategorie)
    {
        $sql = "SELECT * from questions WHERE categorie = :paramcategorie";
        $params = array(
            "paramcategorie" => $paramCategorie
        );
        $results = parent::executeQuery($sql, $params);
        return $results->fetchAll();
    }
}
