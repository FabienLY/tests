<?php
class DBFactory
{
    public static function getMysqlConnexionWithPDO()
    {
        $db = new PDO('mysql:host=localhost;dbname=tests', 'phpmyadmin', 'Pain38Less');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }

    public static function getMysqlConnexionWithMySQLi()
    {
        return new MySQLi('localhost', 'phpmyadmin', 'Pain38Less', 'tests');
    }
}