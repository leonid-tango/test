<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 11/4/15
 * Time: 11:25 PM
 */

namespace controllers;

require_once "UserInterface.php";
require_once "models/UserModel.php";

use models\UserModel;



class UserController implements User
{

    public function loginAction($post)
    {
//        var_dump($post);
        // TODO: Implement loginAction() method.

        $email = self::cleanEmail($post['user_email']);
        $password = self::cleanPassword($post['user_password']);


        $user  = new UserModel();

        $user->setUser(['email' => $email, 'password' =>$password]);
    }

    public function registerAction($email, $password, $repeatPassword)
    {
        // TODO: Implement registerAction() method.
        $this->CheckPasswords($password, $repeatPassword);
    }

    public function logoutAction()
    {
        // TODO: Implement logoutAction() method.
    }

    private function cleanEmail($email)
    {
        return $email;
    }

    private function cleanPassword($password)
    {
        return $password;
    }

    private function CheckPasswords($password, $repeatPassword)
    {
        return true;// dummy return, will return true or false if password is not identical
    }
}