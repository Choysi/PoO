<?php
class Fruit
{
    // Properties
    public $name;
    public $color;
    function __construct($c_name, $c_color)
    {
        $this->name = $c_name;
        $this->color = $c_color;
    }
    // Methods
    function getName()
    {
        return $this->name;
    }
    function setName($p_name)
    {
        $this->name = $p_name;
    }
    function getColor()
    {
        return $this->color;
    }
    function setColor($p_color)
    {
        $this->color = $p_color;
    }
    function displayNameAndColor()
    {
        echo $this->name . " " . $this->color;
        return;
    }
}

$b = new Fruit("Avocat", "Jaune");

$b->displayNameAndColor();
