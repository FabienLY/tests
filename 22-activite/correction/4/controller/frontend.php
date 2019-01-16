<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
	$postmanager= new PostManager();
	$posts=$postmanager->getPosts();
	require('view/frontend/listPostView.php');
}
function post()
{

	$postmanager=new PostManager();
	$commentmanager=new CommentManager();

	$post=$postmanager->getPost($_GET['id']);
	$comments=$commentmanager->getComments($_GET['id']);

	require('view/frontend/postView.php');
}

function addComment($postId,$author,$comment)
{
	$commentmanager=new CommentManager();
	$affectedLines=$commentmanager->postComment($postId,$author,$comment);
	if($affectedLines==false){
		throw new Exception('Impossible d\'ajouter le commentaire');
		
	}
	else{
		header('Location:index.php?action=post&id='.$postId);
	}
}
function editcomments($postId,$commentId,$comment)
{
	$commentmanager=new CommentManager();
	$affectedLines=$commentmanager->editcomment($commentId,$comment);
	if($affectedLines==false){
		throw new Exception("Impossible de modifier le commentaire");
	}
	else{
		header('Location:index.php?action=post&id='.$postId);
	}
}