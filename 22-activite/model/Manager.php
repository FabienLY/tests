<?php

namespace OpenClassrooms\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less');
        return $db;
    }
}