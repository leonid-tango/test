<?php
require_once 'controllers/UserController.php';
include_once 'views/login.php';

use controllers\UserController;

$setUser = new UserController();
$setUser->loginAction($_POST);






