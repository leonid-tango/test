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
        $query = $set->prepare('INSERT INTO user(email, password, created_at) VALUES (?, ? , ?)');
        $query->bindParam(1, $data['email']);
        $query->bindParam(2, $data['password']);
        $query->bindParam(3, date('Y-m-d H:i:s'));

        $query->execute();
    }

}