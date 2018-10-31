<?php
//Faire un try afin d'afficher un message spécifique en cas d'erreur
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//rajouter ?console=PC sinon rien ne s'affiche
if (isset($_GET['console']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    //Requete préparée

    $requete = $bdd->prepare('SELECT console, nom FROM jeux_video WHERE console=?');
    $requete->execute(array($_GET['console']));
    while ($donnees = $requete->fetch())
    {
        echo '<p>'. $donnees['console'] . ' - ' . $donnees['nom'] . '</p>';
    }
}

?>