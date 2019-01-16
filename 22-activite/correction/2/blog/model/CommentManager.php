<?php

namespace OpenClassrooms\Blog\Model2;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function req_get_comments($id_post)
    {
        $db = $this->db_connect();

        $req_get_comments = $db->prepare('
            SELECT id, id_post, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS date_format_comment 
            FROM comments WHERE id_post = :id_post 
            ORDER BY date_comment 
            ');
        $req_get_comments->bindParam(':id_post', $id_post, \PDO::PARAM_INT);
        $req_get_comments->execute() or die(print_r($req_get_comments->errorInfo(), TRUE));

        return $req_get_comments ;
    }

    public function req_insert_comment($id_post, $pseudo, $comment)
    {
        $db = $this->db_connect();

        $req_insert_comment = $db->prepare('
            INSERT INTO comments(id_post, author, comment) 
            VALUES(:id_post, :author, :comment)
            ');
        $req_insert_comment->bindParam(':id_post', $id_post, \PDO::PARAM_INT);
        $req_insert_comment->bindParam(':author', $pseudo, \PDO::PARAM_INT);
        $req_insert_comment->bindParam(':comment', $comment, \PDO::PARAM_INT);
        $req_insert_comment->execute() or die(print_r($req_insert_comment->errorInfo(), TRUE));

        return $req_insert_comment ;
    }

    public function req_get_post_comment($id_post, $id_comment)
    {
        $db = $this->db_connect();

        $req_get_post_comment = $db->prepare('
            SELECT id, id_post, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS date_format_comment 
            FROM comments WHERE id_post = :id_post AND id = :id_comment
            ');
        $req_get_post_comment->bindParam(':id_post', $id_post, \PDO::PARAM_INT);
        $req_get_post_comment->bindParam(':id_comment', $id_comment, \PDO::PARAM_INT);
        $req_get_post_comment->execute() or die(print_r($req_get_post_comment->errorInfo(), TRUE));

        $data_req_get_post_comment = $req_get_post_comment->fetch();

        return $data_req_get_post_comment ;
    }

    public function req_update_comment($id_post, $id_comment, $modification)
    {
        $db = $this->db_connect();

        $req_update_comment = $db->prepare('
            UPDATE comments
            SET comment = :modification
            WHERE id_post = :id_post AND id = :id_comment
            ');
        $req_update_comment->bindParam(':id_post', $id_post, \PDO::PARAM_INT);
        $req_update_comment->bindParam(':id_comment', $id_comment, \PDO::PARAM_INT);
        $req_update_comment->bindParam(':modification', $modification, \PDO::PARAM_INT);
        $req_update_comment->execute() or die(print_r($req_update_comment->errorInfo(), TRUE));

        return $req_update_comment ;
    }

}