<?php

require_once "hydrate.class.php";

class Reponse extends Entity
{

    public $id;
    public $reponse;
    public $justefaux;
    public $idquestion;

    function __construct($data)
    {
        parent::hydrate($data);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdQuestion()
    {
        return $this->idquestion;
    }

    public function getReponse()
    {
        return $this->reponse;
    }
    public function getJusteFaux()
    {
        return $this->justefaux;
    }

    public function setId($n)
    {
        $this->id = $n;
    }

    public function setIdQuestion($n)
    {
        $this->idquestion = $n;
    }

    public function setReponse($n)
    {
        $this->reponse = $n;
    }

    public function setJusteFaux($n)
    {
        $this->justefaux = $n;
    }
}
