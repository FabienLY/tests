<?php $template_title = 'Mon super blog - modifier le commentaire' ;

ob_start();

if (!empty ($data_req_get_post['title']))
	{ ?>
		<br />
		<br />
		<div class="news">

			<h3> 
				<?php echo '<strong>' . htmlspecialchars(strip_tags($data_req_get_post['title'])) . '</strong> <em>le ' . htmlspecialchars(strip_tags($data_req_get_post['date_format_post'])) . '</em>' ; ?>
			</h3>

			<p> <?php echo nl2br(htmlspecialchars(strip_tags($data_req_get_post['content']))) ; ?><br />

			</p>

		</div>

		<?php 

		if (!empty ($data_req_get_post_comment['comment']))
			{ ?>
				<form class="modify_comment" action="index.php?action=modify&id_post=<?= $_GET['id_post'] ?>&id_comment=<?= $_GET['id_comment'] ?>" method="post">
					<p>
						<?php echo '<strong>' . htmlspecialchars(strip_tags($data_req_get_post_comment['author'])) . '</strong><br /> le ' . htmlspecialchars(strip_tags($data_req_get_post_comment['date_format_comment'])) . ' :<br /><br />"' ; ?>

						<?php echo nl2br(htmlspecialchars(strip_tags($data_req_get_post_comment['comment']))) ; ?> "<br />
					</p>
				</div>
				<div>
					<p>Modification de ce post : </p>
				</div>
				<div>
					<input type="text" name="modification" id="modification" required size="100"/>
				</div>
				<div>
					<br />
					<input type="submit" value="Poster" />
				</form>
				<?php
			}

			else
			{
				echo ('La requête n\'a pas retrouvé le commentaire') ; // throw new Exception('La requête n\'a pas retrouvé le commentaire');
			} 

		}

	else
	{
	echo ('La requête n\'a pas retrouvé le post') ; // throw new Exception('La requête n\'a pas retrouvé le post');
	}

$template_content = ob_get_clean();

require('template.php');