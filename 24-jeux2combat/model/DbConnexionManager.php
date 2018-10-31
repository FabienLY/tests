<?php

namespace jeux2combat;

class DbConnexionManager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less');
        return $db;
    }
}