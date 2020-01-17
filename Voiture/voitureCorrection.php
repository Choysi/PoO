<?php
class Voiture
{

    public $modele;
    public $marque;
    public $couleur;
    public $annee;

    public $etat = "stop";
    public $vitesse = 0;


    function __construct($modele, $marque, $couleur, $annee)
    {
        $this->modele = $modele;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->annee = $annee;
    }
    function getEtat()
    {
        return $this->etat;
    }

    function setEtat($n)
    {
        $this->etat = $n;
    }

    function getModele()
    {
        return $this->modele;
    }
    function getMarque()
    {
        return $this->marque;
    }
    function getCouleur()
    {
        return $this->couleur;
    }
    function getAnnee()
    {
        return $this->annee;
    }

    function setModele($n)
    {
        $this->modele = $n;
    }
    function setMarque($n)
    {
        $this->marque = $n;
    }
    function setCouleur($n)
    {
        $this->couleur = $n;
    }
    function setAnnee($n)
    {
        $this->annee = $n;
    }

    function Demarre()
    {
        if ($this->etat == "stop") {

            echo $this->modele . " " . $this->marque . " démarre.";
            $this->setEtat("a demarrer");
        } else {
            echo $this->modele . " " . $this->marque . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
        }
    }

    function Accelere()
    {
        if ($this->etat == "stop") {
            echo $this->modele . " " . $this->marque . " n'a pas démarrer";
            return;
        }
        if ($this->vitesse < 100) {
            echo $this->modele . " " . $this->marque . " accelere";
            $this->vitesse += 50;
            echo '<br>';
            echo $this->modele . " " . $this->marque . " est maintenant a " . $this->vitesse . "km/h";
            return;
        } else if ($this->vitesse == 100) {
            echo $this->modele . " " . $this->marque . " ne peux pas acélerer, elle est déjà a fond";
            return;
        } else if ($this->etat == "arret") {
            echo $this->modele . " " . $this->marque . " ne peux pas accélerer si elle n'a pas démarrer";
            return;
        }
    }

    function Decelere()
    {
        if ($this->etat == "stop") {
            echo $this->modele . " " . $this->marque . " n'a pas démarrer";
            return;
        }
        if ($this->vitesse > 0) {
            echo $this->modele . " " . $this->marque . " decelere";
            $this->vitesse = 0;
            echo '<br>';
            echo $this->modele . " " . $this->marque . " est maintenant a " . $this->vitesse . "km/h";
            if ($this->vitesse == 0) {
                $this->setEtat("arret");
                echo '<br>';
                echo $this->modele . " " . $this->marque . " est a l'arret";
            }
            return;
        } else if ($this->vitesse == 0) {
            echo $this->modele . " " . $this->marque . " est a l'arret";
        } else if ($this->etat == "arret") {
            echo $this->modele . " " . $this->marque . " ne peux pas accélerer si elle n'a pas démarrer";
        }
    }

    function Eteindre()
    {
        if ($this->etat != "stop") {
            echo $this->modele . " " . $this->marque . "a eteint son moteur.";
            $this->setEtat("stop");
        } else {
            echo "Allume déjà le moteur !";
        }
    }
}

$voit = new Voiture("Classe A", "Mercedes", "Noir", "2017");

$voit->Demarre();

echo '<br>';

$voit->Demarre();

echo '<br>';
$voit->Eteindre();
echo '<br>';
$voit->Eteindre();
echo '<br>';
$voit->Accelere();
echo '<br>';
$voit->Accelere();
echo '<br>';
$voit->Decelere();
echo '<br>';
$voit->Decelere();
echo '<br>';
$voit->Demarre();
echo '<br>';
$voit->Eteindre();

echo '<br>';
$voit->Eteindre();
