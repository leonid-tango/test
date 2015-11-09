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
require_once "Core/Session.php";
require_once "Core/ExceptionHandler.php";

use models\UserModel;
use Core\Session;
use Core\ExceptionHandler;

class UserController implements User
{

    /**
     * @param $post
     * @return array|int
     */
    public function loginAction(array $post)
    {
        $user  = new UserModel();
        $session = new Session();
        $handleErrors = new ExceptionHandler();

        $userErrors = $handleErrors->notEnoughData($post);

        if (!empty($userErrors)) {
         return $session->createSession('errors', $userErrors);
        }

        $email = self::prepareEmail($post['user_email']);
        $password = self::preparePassword($post['user_password'], $email);

        $loggedUser = $user->getUser(['email' => $email,'password' => $password]);

        if (empty($loggedUser)) {
            return $loggedUser = false;
        }
            return $loggedUser;
    }

    /**
     * @param array $post
     * @return array|bool
     */
    public function registerAction(array $post)
    {
        $user = new UserModel();
        $session = new Session();
        if (isset($post['repeat_password'])) {
            if (!$this->CheckPasswords($post['user_password'], $post['repeat_password'])) {
                 return $session->createSession('errors', ['success' => false, 'message' => 'password not equal']);
            }
        }

        $email = self::prepareEmail($post['user_email']);
        $password = self::preparePassword($post['user_password'], $email);

        $user->setUser(['email' => $email, 'password' =>$password, 'user_name' => $post['user_name']]);

        $registeredUser = $user->getUser(['email' => $email, 'password' => $password]);
        if ($registeredUser) {
            $session->createSession('regSes', ['success' => true, 'message' => 'registered successful']);
        }
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