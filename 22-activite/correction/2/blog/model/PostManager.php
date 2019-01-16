<?php

namespace OpenClassrooms\Blog\Model2;

require_once("model/Manager.php");

class PostManager extends Manager
{
    public function req_display_posts()
    {
        $db = $this->db_connect();

        $req_display_posts = $db->prepare('
            SELECT id, title, content, DATE_FORMAT(date_creation, 
            \'%d/%m/%Y à %Hh%imin%ss\') AS date_format 
            FROM posts ORDER BY date_creation 
            DESC
            ');
        $req_display_posts->execute() or die(print_r($req_display_posts->errorInfo(), TRUE));

        return $req_display_posts ;
    }

    public function req_get_post($id_post)
    {
        $db = $this->db_connect();

        $req_get_post = $db->prepare('
            SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_format_post 
            FROM posts WHERE id = :id_post 
            ');
        $req_get_post->bindParam(':id_post', $id_post, \PDO::PARAM_INT);
        $req_get_post->execute() or die(print_r($req_get_post->errorInfo(), TRUE));

        $data_req_get_post = $req_get_post->fetch();

        return $data_req_get_post ;
    }

}