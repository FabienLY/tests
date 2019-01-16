
<?php $title = 'Mon Blog Erreur'; 

ob_start(); ?>

<div>
	<p> <?= $errorMessage ?></p>
</div>

<?php $content = ob_get_clean(); 

require('template.php'); 
