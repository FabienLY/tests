<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Minichat</title>
  </head>
  <body>
    <form action="minichat_post.php" method="post">
      <div><label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" value=<?php echo htmlspecialchars($_COOKIE['pseudo']); ?> required></div>
      <div><label for="message">Message : </label><input type="text" name="message" id="message" required></div>
      <button type="submit" name="button">Envoyer</button>
    </form>
    <?php

      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }

      catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }

      $reponse = $bdd->query("SELECT pseudo, message, DATE_FORMAT(date, '[le %d/%m/%Y à %Hh%imin%ss]') AS date FROM minichat ORDER BY id DESC") or die(print_r($bdd->errorInfo()));

      while ($donnees = $reponse->fetch())
        {
        	echo '<p>' . $donnees['date'] . ' <strong>' . htmlspecialchars($donnees['pseudo']) . ' : </strong>' . htmlspecialchars($donnees['message']) . '</p>';
        }

      $reponse->closeCursor();

      ?>
  </body>
</html>
