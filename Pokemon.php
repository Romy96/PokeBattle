<?php

class Pokemon {
    public static $Counter = 0;

    public $Id; // unique number for each object
    public $EnergyType;
    public $Name;
    public $Health;
    public $Attacks;    // array of Attack objects
    public $Weakness;   // reference to Weakness object
    public $Resistance;   // reference to Resistance object

    public function __construct($nm, $hp, $et) {
        self::$Counter = self::$Counter + 1;
        $this->Id = self::$Counter;

        $this->Name = $nm;
        $this->EnergyType = $et;
        $this->Health = $hp;
        $this->Attacks = [];
    }

    public function DoDamage($energyType, $damage) {
        echo 'Attacked by:' . $energyType . '<br>';

        if($this->Resistance->EnergyType == $energyType){
            $damage = $damage - $this->Resistance->Value;
            echo 'Lightning Resistance: Lowered by ' . $this->Resistance->Value . '<br>';
        }

        // if($this->Weakness->EnergyType == $energyType){
        //     $damage = $damage * $this->Weakness->Multiplier;
        //     echo 'Weakness: Multiplied by: ' . $this->Weakness->Multiplier . '<br>';
        // }

        $this->Health = $this->Health - $damage;

        echo $damage . 'Damage taken!';
    }
}