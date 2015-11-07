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

    /**
     * @param array $data
     */
    public function setUser($data = array())
    {
        $connect = new ConnectDb();
        $set = $connect->Connect();
        $query = $set->prepare('INSERT INTO users(email, password, user_name , created_at)
                                VALUES (?, ? , ?, ?)');

        $query->bindParam(1, $data['email']);
        $query->bindParam(2, $data['password']);
        $query->bindParam(3, $data['user_name']);
        $query->bindParam(4, date('Y-m-d H:i:s'));

        $query->execute();

    }


    /**
     * @param array $data
     * @return array|int
     * @internal param $password
     * @internal param array $data
     */
    public function getUser(array $data)
    {

        $connect = new ConnectDb();
        $get = $connect->Connect();
        $query = $get->prepare('SELECT *
                                FROM `users`
                                WHERE `password` = :pass AND `email` = :email');

        $query->bindParam(':pass', $data['password']);
        $query->bindParam(':email', $data['email']);
        $query->execute();

        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

}