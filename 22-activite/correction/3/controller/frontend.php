<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new \OpenClassrooms\Blog\Model3\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new \OpenClassrooms\Blog\Model3\PostManager();
    $commentManager = new \OpenClassrooms\Blog\Model3\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \OpenClassrooms\Blog\Model3\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function comment($postID, $commentID)
{   
    $postManager = new \OpenClassrooms\Blog\Model3\PostManager();
    $commentManager = new \OpenClassrooms\Blog\Model3\CommentManager();
    
    $post = $postManager->getPost($postID);
    $comment = $commentManager->getComment($commentID);

    require('view/frontend/commentView.php');
    
}

function editComment($id, $author, $comment)
{
    $commentManager = new \OpenClassrooms\Blog\Model3\CommentManager();

    $affectedLines = $commentManager->editComment($id, $author, $comment);
    
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else{
        header('Location: index.php');
    }

}