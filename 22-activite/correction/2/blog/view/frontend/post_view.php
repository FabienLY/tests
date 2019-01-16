<?php $template_title = 'Mon super blog - commentaires' ;

ob_start();

?>

<br />
<br />
<div class="news">

	<h3> 
		<?php echo '<strong>' . htmlspecialchars(strip_tags($get_post['title'])) . '</strong> <em>le ' . htmlspecialchars(strip_tags($get_post['date_format_post'])) . '</em>' ; ?>
	</h3>

	<p> <?php echo nl2br(htmlspecialchars(strip_tags($get_post['content']))) ; ?><br />

	</p>

</div>

<div class="comments">
	<?php	

	while ($get_comments = $req_get_comments->fetch())
	{
		?>
		<p class=margin>
			<?php echo '<strong>' . htmlspecialchars(strip_tags($get_comments['author'])) . '</strong> le ' . htmlspecialchars(strip_tags($get_comments['date_format_comment'])) . ' (<a href="index.php?action=display_comment&id_post=' . $get_comments['id_post'] . '&id_comment=' . $get_comments['id'] . '">modifier</a>)<br />' ; ?>

			<?php echo nl2br(htmlspecialchars(strip_tags($get_comments['comment']))) ; ?><br />
		</p>
		<?php
	}
	?>
</div>

<?php

if (isset ($_SESSION['pseudo']))
{
	?>
	<form action="index.php?action=add_comment&amp;id=<?= $_GET['id'] ?>" method="post">
		<div>
			<label for="comment">Commenter (en tant que <?php echo $_SESSION['pseudo'];?>) :</label>
		</div>
		<div>
			<input type="text" name="comment" id="comment" required size="30"/>
		</div>
		<div>
			<input type="submit" value="Poster" />
		</div>
	</form>

	<?php
}

else
{
	echo '<h1>Pour commenter veuillez vous inscrire</h1>' ;
}

$template_content = ob_get_clean();

require('template.php');