<?php $title = 'Mon Blog'; 


ob_start(); ?>


<h2>Modifier le Commentaire</h2>

    <form action="index.php?action=updateComment&amp;commentId=<?= $comment['id'] ?>&amp;id=<?= $post['id'] ?>" method="post">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" placeholder="<?= $comment['author'] ?>">
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment" placeholder="<?= $comment['comment'] ?>"></textarea>
        </div>
        <div>
            <input type="submit" value="Modifier">
        </div>
    </form>


<?php $content = ob_get_clean(); 

require('template.php'); 