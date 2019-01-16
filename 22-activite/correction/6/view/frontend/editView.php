<?php $title= 'modifier un commentaire'?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<H2>Modifier un commentaire</H2>
<form action="index.php?action=editComment&amp;id=<?= $comment['id'] ?>" method="post">
	<div>
		<p>Auteur: <?=$comment['author']?></p>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"><?=$comment['comment']?></textarea>
    <div>
        <input type="submit"  value="modifier"/>
    </div>
</form>

<?php $content=ob_get_clean();?>
<?php require ('template.php'); ?>