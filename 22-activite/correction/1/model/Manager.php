<?php
namespace OpenClassrooms\Blog\Model1;

class Manager{
    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less');
        return $db;
    }

    
}