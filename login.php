<?php
 include_once 'views/templates/header.php';
 require_once 'Core/Session.php';

 use Core\Session;

 $session = new Session();
?>

<div class="container-fluid">
<div class="col-md-4 col-md-offset-4">
    <h3 class="text-center text-danger"><?= isset($_SESSION['errors']['notAllowed']) ? $_SESSION['errors']['notAllowed'] : '' ?></h3>
    <h2 class="text-center">hello</h2>

    <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="login-form">
        <div class="form-group">
            <div class="helpers text-center text-danger">
                <span> <?= isset($_SESSION['errors']['user_name']) ?  $_SESSION['errors']['user_name'] . ' can not be empty' : '' ?></span>
            </div>
              <label for="user_name" class="sr-only">Name</label>
              <input type="tel" name="user_name" id="user_name" class="form-control" placeholder="name">
        </div>
        <div class="form-group">
            <div class="helpers text-center text-danger">
                <span class=""><?= isset($_SESSION['errors']['user_email']) ?  $_SESSION['errors']['user_email'] . ' can not be empty' : '' ?></span>
            </div>
            <label for="user_email" class="sr-only">Email</label>
            <input type="email" name="user_email" id="user_email" class="form-control" placeholder="email address">
        </div>
        <div class="form-group">
            <div class="helpers text-center text-danger">
                <span class=""><?= isset($_SESSION['errors']['user_password']) ?  $_SESSION['errors']['user_password'] . ' can not be empty' : '' ?></span>
            </div>
            <label for="user_password" class="sr-only">Password</label>
            <input type="password" name="user_password" id="user_password" class="form-control" placeholder="password">
        </div>
        <div class="form-group hidden">
            <div class="helpers text-center text-danger">
                <span class="helper-text">passwords not match... try again</span>
            </div>
            <label for="repeat_password" class="sr-only">Repeat Password</label>
            <input type="password" name="repeat_password" id="repeat_password" class="form-control" placeholder="repeat password">
        </div>
        <input type="hidden" value="login" name="login"/>
        <div class="form-group">
            <a href="#" class="btn btn-link pull-left switch">create user</a>
            <button type="submit" class="btn btn-primary pull-right">login</button>
        </div>
    </form>
</div>
</div>
<?php include_once 'views/templates/footer.php' ?>