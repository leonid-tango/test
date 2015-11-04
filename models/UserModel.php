<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 11/4/15
 * Time: 11:43 PM
 */

namespace models;

require_once 'Core/ConnectDb.php';

use Core\ConnectDb;

class UserModel
{
/*    private $dbname = 'test_app';

    private $host = 'localhost';

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
        return $db;
    }*/


    /**
     * @param array $data
     */
    public function setUser($data = array())
    {
        $connect = new ConnectDb();
//        $set = $this->Connect();
        $set = $connect->Connect();
        $query = $set->prepare('INSERT INTO user(email, password, created_at) VALUES (?, ? , ?)');
        $query->bindParam(1, $data['email']);
        $query->bindParam(2, $data['password']);
        $query->bindParam(3, date('Y-m-d H:i:s'));

        $query->execute();
    }

}