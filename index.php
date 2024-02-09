<?php
use class\personnage;

spl_autoload_register( function (string $className) {
    include str_replace( '\\',  DIRECTORY_SEPARATOR, $className) . '.php';
});

$merlin = new personnage("Merlin");
$merlin->regenerer(5);

$harry = new personnage("Harry");

$merlin->attaque($harry);

if(personnage->mort()){
    echo 'Perso est Dead :(';
}else{
    echo 'Perso à survécu';
}

var_dump($merlin);
var_dump($harry);


