<?php include_once 'templates/header.php'; ?>
<?php session_start(); ?>
<div class="container-fluid">
    <h1 class="text-center">Hello User</h1>
    <p class="text-center">You are logged as: <strong><?= $_SESSION['user_name'] ?></strong></p>

    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="login-form">
        <div class="button-group">
            <button class="btn btn-block btn-primary btn-lg" name="logout">Logout</button>
        </div>
    </form>
    </div>
    </div>
</div>


<?php include_once 'templates/footer.php'?>