<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['titre']) ?>
                <em>le <?= $post['date_creation_fr'] ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($post['contenu'])) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date_commentaire_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['commentaire']));
        ?>
            <a href="index.php?action=editco&amp;auteur=<?=$comment['auteur']?>&amp;id=<?=$comment['id']?>&amp;postId=<?=$post['id']?>&amp;comment=<?=$comment['commentaire']?>">modifier</a></p>
       <?php
        }
        ?>
        <br/>
        <h2>Ajouter un commentaire</h2>
        <form action="index.php?action=addComment&amp;id=<?= $post['id']?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author"/>
            </div>   
            <div>

                 <label for="comment">Commentaire</label><br />

                 <textarea id="comment" name="comment"></textarea>

            </div>

            <div>

            <input type="submit" />

            </div>

        </form>       
    </body>
</html>