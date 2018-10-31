<?php
/**
 * Created by PhpStorm.
 * User: vistoon
 * Date: 10/10/18
 * Time: 10:17 AM
 */
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$nom = 'Battlefield 1942';
$possesseur = 'Patrick';
$console = 'PC';
$prix = 45;
$nbre_joueurs_max = 50;
$commentaires = 'Les chips BBQ c\'est top !';

if (isset($nom, $possesseur, $console, $prix, $nbre_joueurs_max, $commentaires)) {
    $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
    $req->execute(array(
        'nom' => $nom,
        'possesseur' => $possesseur,
        'console' => $console,
        'prix' => $prix,
        'nbre_joueurs_max' => $nbre_joueurs_max,
        'commentaires' => $commentaires
    ));

    echo 'Le jeu a bien été ajouté !';
}
else {
    echo 'Variable(s) non définie(s) et/ou manquante(s) - try again :)';
}
?>