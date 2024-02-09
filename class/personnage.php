<?php

namespace class;
class personnage
{
    public $vie = 80;
    public $atk = 20;
    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
    }

    public function crier()
    {
        echo 'LEEROY JEINKINS';
    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    public function attaque($cible)
    {
        $cible->vie = 20;
        var_dump($cible);
    }
}