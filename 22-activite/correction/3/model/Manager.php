<?php

namespace OpenClassrooms\Blog\Model3;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=test;charset=utf8', 'phpmyadmin', 'Pain38Less');
        return $db;
    }
}