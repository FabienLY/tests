<?php $template_title = 'Espace membre - Inscription' ;

ob_start();

?>

<div id="create_account">
	<form action="index.php?action=create_account" method="post">
		<label for="pseudo_apply">Pseudo :</label><br /><input type="text" name="pseudo_apply" id="pseudo_apply" required size="20"/> 
		<?php 
		if ($_GET['doublon_pseudo']==1)
		{
			echo 'Pseudo déjà utilisé, veuillez en choisir un autre.' ;
		}
		?><br /><br />
		<label for="pass_apply1">Mot de passe :</label><br /><input type="password" name="pass_apply1" id="pass_apply1" required size="20"/> <br /><br />
		<label for="pass_apply2">Vérification du mot de passe :</label><br /><input type="password" name="pass_apply2" id="pass_apply2" required size="20"/>
		<?php 
		if ($_GET['pass_different']==1)
		{
			echo 'Les deux mots de passe saisis sont différents, veuillez recommencer.' ;
		}
		?><br /><br />
		<label for="email_apply">e-mail :</label><br /><input type="email" name="email_apply" id="email_apply" required size="20"/>
		<?php 
		if ($_GET['invalid_email']==1)
		{
			echo 'Adresse e-mail invalide.' ;
		}
		elseif ($_GET['incomplet']==1)
		{
			echo 'Merci de remplir tous les champs pour vous inscrire.' ;
		}
		?><br /><br />


		<input id="valid" type="submit" value="Entrer" autofocus />
	</form>
</div>

<?php

$template_content = ob_get_clean();

require('template.php');