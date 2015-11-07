<?php
require_once 'controllers/UserController.php';

session_start();

use controllers\UserController;

    $user = '';
    $getUser = new UserController();

if ($_POST) {
    if (isset($_POST['login'])) {
        $user = $getUser->loginAction($_POST);
    }else {
        $user = $getUser->registerAction($_POST);
    }
}
include_once 'views/login.php';

if ($user) {
    $user = $user[0];

    $_SESSION['email'] = $user['email'];
    $_SESSION['user_name'] = $user['user_name'];
    header('Location:views/greating.php ');
} else {
}



