<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if (isset($_GET['possesseur'], $_GET['prix_max'])) {
    $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur  AND prix <= :prixmax ORDER BY prix');
    $req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));

    echo '<ul>';
    while ($donnees = $req->fetch()) {
        echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
    }
    echo '</ul>';

    $req->closeCursor();
}
else{
    echo 'Variable(s) manquante(s) - Dommage :)';
}
?>