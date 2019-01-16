<?php

namespace MVC_oc\Blog\Model;

require_once("model/Manager.php");


class CommentManager extends Manager
{
    /**
    *  
    *Récupère tous les commentaires
    *
    *@param postId $postId Id du billet en question
    *
    *@return array $comments les commentaires du billet
    */
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    /**
    *  
    *Récupère un commentaires
    *
    *@param commentId $commentId Id du commentaire 
    *
    *@return array $comment le commentaire
    */
    public function getComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
        $req->execute(array($commentId));
        $comment = $req->fetch();

        return $comment;
    }

    /**
    *  
    *Enregistre un nouveau commentaire
    *
    *@param postId $postId Id du billet en question
    *
    *@param author $author auteur du commentaire
    *
    *@param comment $comment contenu du commentaire
    *
    *@return bool true si réussi
    */
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    /**
    *  
    *Modifie un commentaire
    *
    *@param author $author auteur du commentaire
    *
    *@param comment $comment contenu du commentaire
    *
    *@return bool true si réussi
    */
    public function updateComment($commentId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('  UPDATE comments 
                                    SET
                                        author = :author,
                                        comment = :comment
                                    WHERE
                                        id = :comment_id
                                ');

        
            $comments->bindParam(':author', $author, \PDO:: PARAM_STR);
            $comments->bindParam(':comment', $comment, \PDO:: PARAM_STR);
            $comments->bindParam(':comment_id', $commentId, \PDO:: PARAM_INT);
            $affectedLines = $comments->execute();

        return $affectedLines;
    }

}