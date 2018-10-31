<?php $title = 'Modification du commentaire'; ?>

<?php ob_start(); ?>
<h2>Commentaire</h2>

<?php
$comment = $comment->fetch();
?>

    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

<form action="index.php?action=updateComment&amp;id=<?= $comment['id'] ?>" method="post">
    <fieldset>
        <legend> Modifier le commentaire ici</legend>
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" value="<?= $comment['author'];?>"/>
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"><?= $comment['comment'];?>
            </textarea>
        </div>
        <div>
            <input type="submit" value="Changer"/>
        </div>
    </fieldset>
</form>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
