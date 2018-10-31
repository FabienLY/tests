<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT AVG(ROUND(prix)) AS prix_moyen FROM jeux_video');
$donnees = $reponse->fetch();
echo $donnees['prix_moyen'] . '<br />';
$reponse->closeCursor();


$reponse = $bdd->query('SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video');
$donnees = $reponse->fetch();
echo $donnees['nbpossesseurs'] . '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10');
while ($donnees = $reponse->fetch())
{
    echo $donnees['prix_moyen'] . ' - '. $donnees['console'] . '<br />';
}
$reponse->closeCursor();
?>