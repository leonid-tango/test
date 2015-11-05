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

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @return \PDO
     */
    public function Connect()
    {
        try {
            $db = new \PDO('mysql:dbname=test_app;host=localhost', $this->user, $this->pass);
        } catch (\PDOException $e) {
            print "<h1>Mysql Error: " . $e->getMessage() . "</h1>";
            die();
        }
        return $db;
    }
}