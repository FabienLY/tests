<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
//Récupération du dernier pseudo utilisé

$reponse = $bdd->query('SELECT pseudo FROM minichatameliore ORDER BY ID DESC LIMIT 1');
$lastpseudouse = $reponse->fetch();

$reponse->closeCursor();

?>

<html>
    <head>
        <meta charset="utf-8" />
        <link href="style_minichat.css" rel="stylesheet" />
        <title>Mini-chat</title>
    </head>
    <body>
        <form action="minichat_post.php" method="post">

            <p>
        Bienvenue sur le minichat de Fabinou :<br />
                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value=<?php echo $lastpseudouse['pseudo'] ; ?>><br />
                <label for="message">Message</label> : <input type="text" name="message" id="message"/><br />
                <input type="submit" value="Envoyer" /><br />
            </p>

        </form>


    <?php
    //Récupération des 10 derniers messages

    $reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(timestamp, \'%d/%m/%Y à %Hh%imin%ss\') AS date_chat_fr  FROM minichatameliore ORDER BY ID DESC LIMIT 10');

    //Si le tableau existe, affichage de chaque message(toutes les données sont portégées par htmlspecialchars)

    if (isset($reponse)){

        while ($post = $reponse->fetch())
        {
            echo '<p>' . $post['date_chat_fr'] . ' ' .'<strong>' . htmlspecialchars($post['pseudo']) . '</strong>' . ' : ' . htmlspecialchars($post['message']) . '</p>';
        }
    }
    $reponse->closeCursor();

    ?>

    </body>
</html>