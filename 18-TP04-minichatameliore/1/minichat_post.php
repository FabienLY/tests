<?php

  $pseudo = htmlspecialchars($_POST['pseudo']);
  $message = htmlspecialchars($_POST['message']);

  setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true);

  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }

  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }

  $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)') or die(print_r($bdd->errorInfo()));

  $req->execute(array(
    'pseudo' => $pseudo,
    'message' => $message,
  ));

  header('Location: minichat.php');

 ?>
