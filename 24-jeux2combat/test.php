<?php

require 'model/Personnage.php';
require 'model/PersonnagesManager.php';

use jeux2combat\Personnage;
use jeux2combat\PersonnagesManager;

$perso = new Personnage([
    'nom' => 'Victor',
    'forcePerso' => 5,
    'degats' => 0,
    'niveau' => 1,
    'experience' => 0
]);

echo $perso->nom(), ' a ', $perso->forcePerso(), ' de force, ', $perso->degats(), ' de dégâts, ', $perso->experience(), ' d\'expérience et est au niveau ', $perso->niveau(), '<br/>';

$db = new \PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less');

$manager = new PersonnagesManager($db);

$manager->add($perso);