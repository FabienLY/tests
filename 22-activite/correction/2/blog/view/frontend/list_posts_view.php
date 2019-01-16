<?php $template_title = 'Mon SUPER blog' ;

ob_start();

?>

<div id="content">
<br />
	<?php

	while ($data_req_display_posts = $display_posts->fetch())
	{
		?>
		<div class="news">

			<h3> 
				<?php echo '<strong>' . htmlspecialchars(strip_tags($data_req_display_posts['title'])) . '</strong> <em>le ' . htmlspecialchars(strip_tags($data_req_display_posts['date_format'])) . '</em>' ; ?>
			</h3>

			<p> <?php echo nl2br(htmlspecialchars(strip_tags($data_req_display_posts['content']))) ; ?><br />

				<em><a href="index.php?action=display_post&id=<?php echo $data_req_display_posts['id'];?>">comments</a></em>

			</p>

		</div>
		<?php
	}

	?>
<br />
<br />
</div>

<?php

$template_content = ob_get_clean();

require('template.php');