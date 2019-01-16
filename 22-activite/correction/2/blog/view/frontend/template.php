<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?= $template_title ?></title>
	<link href="public/css/style07.css" rel="stylesheet" /> 
</head>

<body>
	
	<div id=topping>
		<nav>

			<aside>
				<p>
					<?php 
					if (isset ($_SESSION['pseudo']))
					{
						echo 'Bonjour ' . ($_SESSION['pseudo']) ;
					}
					?>
				</p>
			</aside>

			<header><h1><a href='index.php?action=list_posts'>Mon super blog</a></h1></header>

			<div id=menu>
				<p class=button><a href='index.php?action=create_account'>Inscription</a></p>
				<p class=button><a href='index.php?action=login'>Connexion</a></p>
				<p class=button><a href='index.php?action=logout'>Deconnexion</a></p>
			</div>

		</nav>
	</div>

<?= $template_content ?>

</body>
</html>