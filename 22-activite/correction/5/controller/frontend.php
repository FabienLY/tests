<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

//Controlleur permettant de tous les billets
function listPosts(){

	//Model
    $postManager = new \MVC_oc\Blog\Model\PostManager(); 

    $posts = $postManager->getPosts(); 

    //Vue
    require('view/frontend/listPostsView.php');
}

//Controlleur permettant l'affichage d'un commentaire pour le modifier
function comment($commentId, $postId){

	//Model
	$commentManager = new \MVC_oc\Blog\Model\CommentManager();

    $postManager = new \MVC_oc\Blog\Model\PostManager();

 	$comment = $commentManager->getComment($commentId);
 
    $post = $postManager->getPost($postId);

    //Vue
    require('view/frontend/changeCommentView.php');
}

//Controlleur permettant l'affichage d'un seul billet
function post(){

	//Model
    $postManager = new \MVC_oc\Blog\Model\PostManager();

    $commentManager = new \MVC_oc\Blog\Model\CommentManager();


    $post = $postManager->getPost($_GET['id']);

    $comments = $commentManager->getComments($_GET['id']);

    //Vérification de l'existance du billet
    if ($post === false){

    	throw new Exception('Ce Billet n\'existe pas');
    }

    //Vue
    require('view/frontend/postView.php');
}

//Controlleur permettant d'ajouter un commentaire
function addComment($postId, $author, $comment){


    $commentManager = new \MVC_oc\Blog\Model\CommentManager();


    $affectedLines = $commentManager->postComment($postId, $author, $comment);


    if ($affectedLines === false) {

        throw new Exception('Impossible d\'ajouter le commentaire !');
    }

    else {
    	//redirige vers la page du billet si ajout réussi
        header('Location: index.php?action=post&id=' . $postId);

    }
}

//Controlleur permettant la modification d'un commentaire
function updateComment( $postId, $commentId, $author, $comment){

	if($author !== '' && $comment !== ''){

		$commentManager = new \MVC_oc\Blog\Model\CommentManager();

    	$affectedLines = $commentManager->updateComment($commentId, $author, $comment);

    	if ($affectedLines === false) {

        	throw new Exception('Impossible de modifier le commentaire !');
   		}
    	else {
    		//redirige vers la page du billet si modification réussi
        	header('Location: index.php?action=post&id=' . $postId);
    	}
	}
	else{

		throw new Exception('Tous les champs ne sont pas renseignés !');
	}
    
}


