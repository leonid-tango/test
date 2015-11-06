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
        $password = self::preparePassword($post['user_password'], $email);

        $loggedUser = $user->getUser(['email' => $email,'password' => $password]);

        if (empty($loggedUser)) {
            return false;
        }
            return $loggedUser;
    }

    /**
     * @param array $post
     * @return array|bool
     */
    public function registerAction(array $post)
    {
        var_dump($post);
        $user = new UserModel();

        if (isset($post['repeat_password'])) {
            if (! $this->CheckPasswords($post['user_password'], $post['repeat_password'])) {
                return false;
            }
        }

        $email = self::prepareEmail($post['user_email']);
        $password = self::preparePassword($post['user_password'], $email);

        $user->setUser(['email' => $email, 'password' =>$password]);


        $registeredUser = $user->getUser(['email' => $email, 'password' => $password]);
        return $registeredUser;
    }

    /**
     *
     */
    public function logoutAction()
    {
        // TODO: Implement logoutAction() method.
    }

    /**
     * @param $email
     * @return string
     */
    private function prepareEmail($email)
    {
        return crypt($email, '$6$rounds=10$TestCryptSalt$');
    }

    /**
     * @param $password
     * @param $salt
     * @return mixed
     */
    private function preparePassword($password, $salt)
    {
        return crypt($password, '$6$rounds=10' . $salt . '$');
    }

    /**
     * @param $password
     * @param $repeatPassword
     * @return bool
     */
    private function CheckPasswords($password, $repeatPassword)
    {
        if ($password !== $repeatPassword) {
            return false;
        }
        return true;
    }
}