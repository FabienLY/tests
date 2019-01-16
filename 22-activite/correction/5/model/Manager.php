<?php

namespace MVC_oc\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=tests;charset=utf8', 'phpmyadmin', 'Pain38Less');
        return $db;
    }
}