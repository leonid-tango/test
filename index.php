<?php
require_once 'controllers/UserController.php';

session_start();

use controllers\UserController;

$user = '';
    $getUser = new UserController();
if ($_POST['login']) {
    $user = $getUser->loginAction($_POST);
}else {
    $user = $getUser->registerAction($_POST);
}

    include_once 'views/login.php';

$user = $user[0];
if ($user) {
    $_SESSION['email'] = $user['email'];
    $_SESSION['pass'] = $user['password'];
    header('Location:views/greating.php ');
}






