<?php
/**
 * Created by PhpStorm.
 * User: vistoon
 * Date: 10/10/18
 * Time: 4:04 PM
 * Page qui recoie les informations du formulaire et qui les implémente dansla DB
 */
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if (isset($_POST['pseudo'], $_POST['message'])) {
    $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],
        'message' => $_POST['message'],
        ));
    echo 'Message bien enregistré dans la bdd - félicitations';
}
else {
    echo 'Probleme rencontré dans la réception des données - try again :)';
}
//Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>