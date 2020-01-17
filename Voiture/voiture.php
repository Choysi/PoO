<?php
class Voiture
{
    public $model;
    public $marque;
    public $couleur;
    public $année;
    public $etat = "eteint";
    function __construct($a_model, $a_marque, $a_couleur, $a_année)
    {
        $this->model = $a_model;
        $this->marque = $a_marque;
        $this->couleur = $a_couleur;
        $this->année = $a_année;
    }

    function getModel()
    {
        return $this->model;
    }
    function setModel($b_model)
    {
        $this->model = $b_model;
    }

    function getMarque()
    {
        return $this->marque;
    }
    function setMarque($b_marque)
    {
        $this->marque = $b_marque;
    }

    function getCouleur()
    {
        return $this->couleur;
    }
    function setCouleur($b_couleur)
    {
        $this->couleur = $b_couleur;
    }

    function getAnnée()
    {
        return $this->année;
    }
    function setAnnée($b_année)
    {
        $this->année = $b_année;
    }

    function getEtat()
    {
        return $this->etat;
    }
    function setEtat($b_etat)
    {
        $this->etat = $b_etat;
    }

    function displayVoit()
    {
        return $this->model . " " . $this->marque . " " . $this->couleur;
    }


    function Demarre()
    {
        if ($this->etat == 'eteint') {
            echo $this->displayVoit() . " " . " à enfin démarrée et la clef a été tourner";
            echo '<br>';
            $this->setEtat("allumée");
            return;
        } else {
            echo $this->displayVoit() . " " . "ne peux pas démarrer elle est déjà entrain de faire autre chose";
            echo '<br>';
            return;
        }
    }

    function Eteint()
    {
        if ($this->etat !== 'eteint') {
            echo $this->displayVoit() . " " . "eteint son moteur";
            echo '<br>';
            $this->setEtat("eteint");
            return;
        } else {
            echo "moteur déja eteint !";
            echo '<br>';
            return;
        }
    }

    function Accelere()
    {
        if ($this->etat === 'allumée') {
            echo $this->displayVoit() . " " . "accélère et est maintenant à 50km/h";
            $this->setEtat("cinquante");
            echo '<br>';
            return;
        }

        if ($this->etat === 'cinquante') {
            echo $this->displayVoit() . " " . " est maintenant à 100km/h";
            $this->setEtat("cent");
            echo '<br>';
            return;
        }

        if ($this->etat === 'cent') {
            echo $this->displayVoit() . " " . " est déjà à fond";
            echo '<br>';
            return;
        } else {
            echo $this->displayVoit() . " " . "Allume déjà le moteur !";
            echo '<br>';
            return;
        }
    }

    function Arret()
    {
        echo $this->displayVoit() . " " . "est a l'arret";
        echo '<br>';
        return;
    }
}
$voit = new Voiture("Classe A", "Mercedes", "Noir", "2017");

echo "<br>";
$voit->Demarre();
$voit->Demarre();
$voit->Eteint();
$voit->Accelere();
$voit->Accelere();
$voit->Demarre();
$voit->Accelere();
$voit->Accelere();
$voit->Accelere();
$voit->Arret();
$voit->Eteint();
$voit->Accelere();











// Classe A Mercedes démarre.
// Classe A Mercedes ne peux pas démarrer elle est déjà entrain de faire autre chose.
// Classe A Mercedesa eteint son moteur.
// Allume déjà le moteur !
// Classe A Mercedes démarre.
// Classe A Mercedes accelere
// Classe A Mercedes est maintenant a 50km/h
// Classe A Mercedes accelere
// Classe A Mercedes est maintenant a 100km/h
// Classe A Mercedes ne peux pas acélerer, elle est déjà a fond
// Classe A Mercedes decelere
// Classe A Mercedes est maintenant a 0km/h
// Classe A Mercedes est a l'arret
// Classe A Mercedes est a l'arret
// Classe A Mercedes ne peux pas démarrer elle est déjà entrain de faire autre chose.
// Classe A Mercedesa eteint son moteur.
// Allume déjà le moteur !
