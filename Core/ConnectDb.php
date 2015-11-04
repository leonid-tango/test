<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 11/4/15
 * Time: 11:44 PM
 */

namespace Core;


class ConnectDb
{

    private $user  = 'root';

    private $pass = '';



    public function getDbName()
    {
        return $this->dbname;
    }

    public function getHst()
    {
        return $this->host;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function Connect()
    {
        try {
            $db = new \PDO('mysql:dbname=test_app;host=localhost', $this->user, $this->pass);
        } catch (\PDOException $e) {
            print "<h1> Error: " . $e->getMessage() . "</h1>";
            die();
        }
        var_dump($db);
        return $db;
    }
}