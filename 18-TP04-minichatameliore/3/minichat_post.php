<?php
	try
	{
		include('config.php');
		$req = $bdd->prepare('insert into tpchat(pseudo , message) values(:pseudo , :message)');
		$req->execute(array('pseudo'=>$_POST['pseudo'],'message'=>$_POST['message']));

		header('Location: mini-chat.php');
	}
	catch(Exception $e)
	{

	}
?>