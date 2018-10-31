<?php

namespace OpenClassrooms\Blog\Model;

require_once ("Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
    public function updateComment($id, $author, $comment)
    {
        $db = $this->dbConnect();
        $commentUpdated = $db->prepare('UPDATE comments SET author = :newAuthor, comment = :newComment, comment_date = NOW() WHERE id = :commentId');
        $affectedLine = $commentUpdated->execute(array(
            'commentId' => $id,
            'newAuthor' => $author,
            'newComment' => $comment
        ));

        return $affectedLine;
    }

    public function getComment($id)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
        $comment->execute(array($id));

        return $comment;
    }

}