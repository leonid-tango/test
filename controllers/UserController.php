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

    /**
     * @param $post
     * @return array|int
     */
    public function loginAction(array $post)
    {
        $user  = new UserModel();

        $email = self::prepareEmail($post['user_email']);
        $password = self::preparePassword($post['user_password']);

        $loggedUser = $user->getUser(['email' => $email,'password' => $password]);

        if (empty($loggedUser)) {
            return false;
        }
            return $loggedUser;
    }

    public function registerAction(array $post)
    {
        var_dump($post);
        $user = new UserModel();

        $this->CheckPasswords($post['password'], $post['repeat_password']);

        $email = self::prepareEmail($post['user_email']);
        $password = self::preparePassword($post['user_password']);

        $user->setUser(['email' => $email, 'password' =>$password]);
    }

    public function logoutAction()
    {
        // TODO: Implement logoutAction() method.
    }

    private function prepareEmail($email)
    {
        return $email;
    }

    private function preparePassword($password)
    {
        return $password;
    }

    private function CheckPasswords($password, $repeatPassword)
    {
        return true;// dummy return, will return true or false if password is not identical
    }
}