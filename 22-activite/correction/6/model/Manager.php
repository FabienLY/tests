<?php
namespace www\project\model;
class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=correction;charset=utf8', 'phpmyadmin', 'Pain38Less');
        return $db;
    }
}