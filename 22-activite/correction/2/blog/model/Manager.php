<?php

namespace OpenClassrooms\Blog\Model2;

class Manager
{
    protected function db_connect()
    {
    	$db = new \PDO('mysql:host=localhost;dbname=correction;charset=utf8', 'phpmyadmin', 'Pain38Less');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $db ;
    }
}