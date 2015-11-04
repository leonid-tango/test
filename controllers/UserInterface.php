<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 11/4/15
 * Time: 11:28 PM
 */
namespace controllers;

interface User
{
    public function loginAction($post);

    public function registerAction($email, $password, $repeatPassword);

    public function logoutAction();
}