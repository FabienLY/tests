<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
        form
        {
            text-align:center;
        }
    </style>
    <body>
        <form action="minichat_post.php" method="post">

            <p>
        Bienvenue sur le minichat de Fabinou :<br />
                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="Fabien"/><br />
                <label for="message">Message</label> : <input type="text" name="message" id="message"/><br />
                <input type="submit" value="Envoyer" /><br />
            </p>

        </form>


    <?php
    /**
     * Created by PhpStorm.
     * User: vistoon
     * Date: 10/10/18
     * Time: 4:03 PM
     * page qui est afficher a l'utilisateur et qui contient le formulaire
     */

    // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    //Récupération des 10 derniers messages

    $reponse = $bdd->query('SELECT pseudo, message  FROM minichat ORDER BY ID DESC LIMIT 10');

    //Si le tableau existe, affichage de chaque message(toutes les données sont portégées par htmlspecialchars)

    if (isset($reponse)){

        while ($post = $reponse->fetch())
        {
            echo '<p><strong>' . htmlspecialchars($post['pseudo']) . '</strong>' . ' : ' . htmlspecialchars($post['message']) . '</p>';
        }
    }
    $reponse->closeCursor();
    ?>
    </body>
</html>