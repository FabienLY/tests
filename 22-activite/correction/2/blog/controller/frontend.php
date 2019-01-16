<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/AccountManager.php');

function list_posts()
{
	session_start();

	$postManager = new \OpenClassrooms\Blog\Model2\PostManager(); // Création d'un objet
    $display_posts = $postManager->req_display_posts(); // Appel d'une fonction de cet objet

	require('view/frontend/list_posts_view.php');
}

function display_post()
{
	session_start();

	$id_post = abs ($_GET['id']);

	$postManager = new \OpenClassrooms\Blog\Model2\PostManager();
    $commentManager = new \OpenClassrooms\Blog\Model2\CommentManager();

    $get_post = $postManager->req_get_post($id_post);

	if (empty($id_post) OR empty($get_post))
	{
		throw new Exception('Billet inexistant');
	} 

	else
	{
		$req_get_comments = $commentManager->req_get_comments($id_post);

		require('view/frontend/post_view.php');
	}
}

function add_comment($id_post, $pseudo, $comment)
{
	$commentManager = new \OpenClassrooms\Blog\Model2\CommentManager();
	$affectedLines = $commentManager->req_insert_comment($id_post, $pseudo, $comment);

	if ($affectedLines === false) 
	{
		throw new Exception('Echec de l\'insertion dans la bdd');
	}

	else 
	{
		header('Location: index.php?action=display_post&id=' . $id_post);
	}
}

function create_account()
{
	session_start();

	$accountManager = new \OpenClassrooms\Blog\Model2\AccountManager();

	if (isset($_POST['pseudo_apply']) AND isset($_POST['pass_apply1']) AND isset($_POST['pass_apply2']) AND isset($_POST['email_apply']))
	{
		// On rend inoffensives les balises HTML que le visiteur a pu rentrer
		$pseudo_apply = htmlspecialchars($_POST['pseudo_apply']);
		$email_apply = htmlspecialchars($_POST['email_apply']);

		// Verification doublon pseudo
		$pseudo_check = $accountManager->req_pseudo_check($pseudo_apply);
		if ($pseudo_check['pseudo_count']==0)
		{
			// Verification du match des mots de passe
			if ($_POST['pass_apply1']==$_POST['pass_apply2'])
			{
				// Verification du format du mot de passe
				if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email_apply))
				{
					// Hachage du mot de passe
					$pass_hache = password_hash($_POST['pass_apply1'], PASSWORD_DEFAULT);

					//insertion membre
					$affectedLines = $accountManager->req_insert_member($pseudo_apply, $pass_hache, $email_apply);
					if ($affectedLines === false) 
					{
						throw new Exception('Echec de l\'insertion dans la bdd');
					}

					else 
					{
						$_SESSION['pseudo'] = $pseudo_apply;
						$_SESSION['pass'] = $_POST['pass_apply1'];
						setcookie('pseudo', htmlspecialchars($pseudo_apply), time() + 365*24*3600, null, null, false, true);
						header('Location: index.php');
					}

					// Amelioration --------------------------------------------------- CAPTCHA ?
					// Amelioration --------------------------------------------------- Confirmation par envoi d'email ?
					
				}

				else
				{
					throw new Exception('Le format de l\'email est invalide');
				}

			}

			else
			{
				throw new Exception('Les mots de passe ne correspondent pas');
			}

		}

		else
		{
			throw new Exception('Le pseudo existe déjà');
		}

	}

	else 
	{
		require('view/frontend/create_account_view.php');
	}
}

function login_check($pseudo, $pass)
{
	session_start();

	$accountManager = new \OpenClassrooms\Blog\Model2\AccountManager();

	$cookie_pseudo = $_COOKIE['pseudo'];
	$accountManager->req_cookie_check($cookie_pseudo);

	if ($req_cookie_check['cookie_exists']==1)
	{
		$_SESSION['pseudo'] = $_COOKIE['pseudo'];
	}

	elseif (isset($pseudo) AND isset($pass) )
	{
		// On rend inoffensives les balises HTML que le visiteur a pu rentrer
		$pseudo = htmlspecialchars($pseudo);
		// Recuperation du pseudo et de son pass hache
		$login_check = $accountManager->req_login_check($pseudo);
		// Comparaison du pass envoye via formulaire et de la base
		$is_pass_ok = password_verify($pass, $login_check['pass']);

		if (!$login_check)
		{
			throw new Exception('Ce pseudo n\'existe pas');
		}

		else 
		{
			if ($is_pass_ok)
			{
				session_start();
				$_SESSION['id'] = $login_check['id'];
				$_SESSION['pseudo'] = $login_check['pseudo'];
				$_SESSION['pass'] = $login_check['pass'];

				setcookie('pseudo', htmlspecialchars($login_check['pseudo']), time() + 365*24*3600, null, null, false, true);

				header('Location: index.php');
			}
			else
			{
				throw new Exception('Mauvais mot de passe');
			}
		}
	}

	else
	{
		require('view/frontend/login_view.php');
	}
}

function logout()
{
	session_start();

	$_SESSION["pseudo"] = NULL;
	$_SESSION = array();

	header("Location: index.php");
}

function display_comment($id_post, $id_comment)
{
	session_start();

	$commentManager = new \OpenClassrooms\Blog\Model2\CommentManager();
	$postManager = new \OpenClassrooms\Blog\Model2\PostManager();

	$id_post = abs ($id_post);
	$id_comment = abs ($id_comment);

	$data_req_get_post = $postManager->req_get_post($id_post);

	$data_req_get_post_comment = $commentManager->req_get_post_comment($id_post, $id_comment);

	require('view/frontend/modify_view.php');
}

function modify($id_post, $id_comment, $modification)
{
	session_start();

	$commentManager = new \OpenClassrooms\Blog\Model2\CommentManager();

	$affectedLines = $commentManager->req_update_comment($id_post, $id_comment, $modification);

	if ($affectedLines === false) 
	{
		throw new Exception('Echec de l\'update dans la bdd');
	}

	else 
	{
		header('Location: index.php?action=display_post&id=' . $id_post);
	}
}
