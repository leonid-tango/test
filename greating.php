<?php
include_once 'views/templates/header.php';
require_once 'Core/Session.php';

use Core\Session;

$session = new Session();

if (!$_SESSION['user_name'] && !$_SESSION['email']) {
    $session->createSession('errors',['notAllowed' => 'Login, please']);
//    $_SESSION['errors']['not_logged'] = 'login please';
    header('Location:./index.php');
}
?>
<div class="container-fluid">
    <h1 class="text-center">Hello User</h1>
    <p class="text-center">You are logged as: <strong><?= $_SESSION['user_name'] ?></strong></p>

    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="button-group">
            <a href="logout.php" class="btn btn-block btn-primary btn-lg" name="logout">Logout</a>
        </div>
    </div>
    </div>
</div>


<?php include_once 'views/templates/footer.php' ?>