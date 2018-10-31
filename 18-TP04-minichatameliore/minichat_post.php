<?php
/**
 *Page qui recoie les informations du formulaire et qui les implémente dans la DB
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
    $req = $bdd->prepare('
        INSERT INTO minichatameliore(pseudo, message,timestamp) 
        VALUES(:pseudo, :message, NOW())');
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],
        'message' => $_POST['message'],
        ));
}

//Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>