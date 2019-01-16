<?php $template_title = 'Espace membre - Connexion' ;

ob_start();

?>

<form action="index.php?action=login" method="post">
		<br />
		<label for="pseudo">Pseudo :</label><br /><input type="text" name="pseudo" id="pseudo" value="<?php echo $_COOKIE['pseudo']; ?>" required size="20"/>
		<br /><br />
		<label for="pass">Mot de passe :</label><br /><input type="password" name="pass" id="pass" value=""required size="20"/>
		<br /><br />

		<input id="valid" type="submit" value="Entrer" autofocus />

	</form>

<?php

$template_content = ob_get_clean();

require('template.php');