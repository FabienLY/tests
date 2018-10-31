<?php
$bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY nom DESC LIMIT 3');
while ($donnees = $reponse->fetch())
{
    echo '<p>'. $donnees['console'] . ' - ' . $donnees['nom'] . '</p>';
}
?>