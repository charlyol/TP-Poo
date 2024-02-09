<?php

namespace class;
class personnage
{
    public $vie = 40;
    public $atk = 20;
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getVie(){
        return $this->vie;
    }
    public function getAsk(){
        return $this->atk;
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

    private function empecher_negatif()
    {
        if ($this->vie <= 0) {
            $this->vie = 0;
        }
    }

    public function attaque($cible)
    {
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }
}