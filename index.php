<?php
require_once 'controllers/UserController.php';
require_once "Core/Session.php";

use controllers\UserController;
use Core\Session;

    $user = '';
    $getUser = new UserController();
    $session = new Session();

if ($_POST) {
    if (isset($_POST['login'])) {
        $user = $getUser->loginAction($_POST);
    }else {
        $user = $getUser->registerAction($_POST);
    }
}
include_once './login.php';

if ($user) {
    var_dump($_SESSION);

    if ($_SESSION['loginSes']['success'] == false && !$_SESSION['regSes']['success'] == false) {
        header('Location:./index.php');
    } elseif ($_SESSION['regSes']['success'] == true) {
        $user = $user[0];
        $session->createSession('email', $user['email']);
        $session->createSession('user_name', $user['user_name']);
        header('Location:./greating.php ');
    }
} else {
}



