<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistance.php';

prettyPrint(Pokemon::$Counter);

$g = new Pokemon("Pikachu", 60, "Lightning");
$g->Weakness = new Weakness("Fire", 1.5);
$g->Resistance = new Resistance("Fighting", 20);
$g->Attacks[] = new Attack("Electric Ring", 50, $g);
$g->Attacks[] = new Attack("Pika Punch", 20, $g);

prettyPrint($g);

$t = new Pokemon("Charmeleon", 60, "Fire");
$t->Weakness = new Weakness("Water", 2);
$t->Resistance = new Resistance("Lightning", 10);
$t->Attacks[] = new Attack("Head Butt", 10, $t);
$t->Attacks[] = new Attack("Flare", 30, $t);


prettyPrint($t);


    foreach($g->Attacks as $attack) {
    prettyPrint("Execute attack " . $attack->Name . ' on ' . $t->Name);
    $attack->Execute($t);
}

    
    


prettyPrint($t);




function prettyPrint($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}