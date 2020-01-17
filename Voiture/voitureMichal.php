<?php
class Voiture
{
    // Attributs
    public $etat = "eteint";
    public $modele;
    public $marque;
    public $couleur;
    public $annee;
    function __construct($c_modele, $c_marque, $c_couleur, $c_annee)
    {
        $this->modele = $c_modele;
        $this->marque = $c_marque;
        $this->couleur = $c_couleur;
        $this->anne = $c_annee;
    }
    // Méthodes  
    //modele
    function getetat()
    {
        return $this->etat;
    }
    function setetat($p_etat)
    {
        $this->etat = $p_etat;
    }
    function getmodele()
    {
        return $this->modele;
    }
    function setmodele($p_modele)
    {
        $this->modele = $p_modele;
    }
    //marque
    function getmarque()
    {
        return $this->marque;
    }
    function setmarque($p_marque)
    {
        $this->marque = $p_marque;
    }
    //couleur
    function getcouleur()
    {
        return $this->couleur;
    }
    function setcouleur($p_couleur)
    {
        $this->couleur = $p_couleur;
    }
    //annee
    function getannee()
    {
        return $this->annee;
    }
    function setannee($p_annee)
    {
        $this->annee = $p_annee;
    }
    //fonction
    public function demarre()
    {
        if ($this->etat == "eteint") {
            echo $this->modele . " " . $this->marque . " démarre";
            echo "<br>";
            $this->setetat("alumé");
            return;
        } else {
            echo $this->modele . " " . $this->marque . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
            echo "<br>";
            return;
        }
    }
    public function eteindre()
    {
        if ($this->etat == "alumé") {
            echo $this->modele . " " . $this->marque . " a eteint son moteur";
            echo "<br>";
            $this->setetat("eteint");
            return;
        }
        if ($this->etat == "eteint") {
            echo " Allume déjà le moteur !";
            echo "<br>";
            return;
        }
        if ($this->etat !== "alumé" || $this->etat !== "eteint") {
            echo $this->modele . " " . $this->marque . " roule trop vite !!!";
            echo "<br>";
            return;
        }
    }
    public function accelere()
    {
        if ($this->etat == "eteint") {
            echo "Allume déjà le moteur !";
            echo "<br>";
            return;
        }
        if ($this->etat == "alumé") {
            echo $this->modele . " " . $this->marque . " est maintenant a 50km/h";
            echo "<br>";
            $this->setetat("roule");
            return;
        }
        if ($this->etat == "roule") {
            echo $this->modele . " " . $this->marque . " est maintenant a 100km/h";
            echo "<br>";
            $this->setetat("roulevite");
            return;
        }
        if ($this->etat == "roulevite") {
            echo $this->modele . " " . $this->marque . " ne peux pas acélerer, elle est déjà a fond";
            echo "<br>";
            return;
        }
    }
    public function decelere()
    {
        if ($this->etat == "roule") {
            echo $this->modele . " " . $this->marque . " decelere";
            echo "<br>";
            echo $this->modele . " " . $this->marque . " est maintenant a 0km/h";
            echo "<br>";
            $this->setetat("alumé");
            return;
        }
        if ($this->etat == "roulevite") {
            echo $this->modele . " " . $this->marque . " decelere";
            echo "<br>";
            echo $this->modele . " " . $this->marque . " est maintenant a 50km/h";
            echo "<br>";
            $this->setetat("roule");
            return;
        }
        if ($this->etat == "alumé") {
            echo $this->modele . " " . $this->marque . " est allumé, mais déja a l'arret";
            echo "<br>";
            return;
        }
        if ($this->etat == "eteint") {
            echo $this->modele . " " . $this->marque . " est deja eteinte";

            return;
        }
    }
}
echo "<br>";
$a = new Voiture("Classe A", "Mercedes", "rouge", "2014");
$a->demarre();
$a->accelere();
$a->accelere();
$a->decelere();
$a->decelere();
$a->eteindre();
