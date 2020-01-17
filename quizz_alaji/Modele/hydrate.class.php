<?php
abstract class Entity // pas de constructor, forcément une extension d'une autre class
{
    protected function hydrate($data) // "protected" > fonction visible que dans la class en elle-même
    {
        foreach ($data as $x => $value) {
            $tab_x = explode("_", $x); // explode scinde une chaîne de caractères en tableau
            $methode = "set" . ucwords($tab_x[0]);
            // pour chaque seter, créer un objet $methode (si bien configuré)
            // ucwords->met en majuscule la première lettre de chaque chaîne de caractères
            if (method_exists($this, $methode)) {
                $this->$methode($value);
            }
        }
    }
}
