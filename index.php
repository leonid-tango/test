<?php
require_once 'controllers/UserController.php';

use controllers\UserController;

include_once 'views/login.php';
$setUser = new UserController();
$setUser->loginAction($_POST);






