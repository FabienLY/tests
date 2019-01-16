<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new \www\project\model\PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new \www\project\model\PostManager();
    $commentManager = new \www\project\model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/PostView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \www\project\model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function viewComment()
{
    $commentManager= new \www\project\model\CommentManager();
    $comment = $commentManager->getComment($_GET['id']);
    
    require ('view/frontend/editView.php');
}

//modifier un commentaire
function editComment($id, $comment)
{
    $commentManager = new \www\project\model\CommentManager();

    $newComment = $commentManager->updateComment($id, $comment);

    if ($newComment === false) {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
        echo 'commentaire:'.$_POST['comment'];
        //echo $_GET['id'];
        $comment = $commentManager->getComment($_GET['id']);
        echo $comment['post_id'];
        //var_dump($comment);
        //die();
        //require ('view/frontend/editView.php');

        header('Location: index.php?action=post&id=' . $comment['post_id']);
    }
}