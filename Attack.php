<?php

class Attack {
    public $Name;           // SlashAttack
    public $AttackPoints;   // TODO: implement https://bulbapedia.bulbagarden.net/wiki/Damage
    public $Attacker; 
    //public $Enemy;      // pokemon

    public function __construct($nme, $attack_points, $attacker) {
        $this->Name = $nme;
        $this->Attacker = $attacker;
        $this->AttackPoints = $attack_points;
        //$this->Enemy = $eny;
    }

    public function Execute($target) {
        if ($target == null) {
            echo 'Cannot execute Attack; target is null';
        }
/*
        if (gettype($target) !=  "Pokemon") {
            die('Cannot execute Attack; target is not of type Pokemon (' . gettype($target) . ')');
        }
*/
        $target->DoDamage($this->Attacker->EnergyType, $this->AttackPoints);
    }
}