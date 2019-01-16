<?php

require_once("model/Manager.php");
class CommentManager extends Manager
{

public function getComments($postId)
{
    $db=$this->dbConnect();

    $comments = $db->prepare('SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM comments WHERE id_billet = ? ORDER BY date_commentaire DESC');
    $comments->execute(array($postId));

    return $comments;
}
public function postComment($postId,$author,$comment)
{
    $db=$this->dbConnect();
    $comments=$db->prepare('INSERT INTO comments(id_billet,auteur,commentaire,date_commentaire)VALUES(?,?,?,NOW())');
    $affectedLines=$comments->execute(array($postId,$author,$comment));
    return $affectedLines;
}
public function editComment($commentId,$comment)
{
	$db=$this->dbConnect();
	$comments=$db->prepare('UPDATE comments SET commentaire=? WHERE id=?');
	$affectedLines=$comments->execute(array($comment,$commentId));
	return $affectedLines;
}
}