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
    public function loginAction(array $post);

    public function registerAction(array $post);

    public function logoutAction();
}