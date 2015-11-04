<?php include_once 'templates/header.php'; ?>

<div class="container-fluid">
<div class="col-md-4 col-md-offset-4">
    <h2 class="text-center">hello</h2>

    <form action="<?php echo  $_SERVER['PHP_SELF']?>" method="post" class="login-form">
        <div class="form-group">
            <div class="helpers">
                <span class="helper-text">Email is invalid... try again</span>
            </div>
            <label for="user_email" class="sr-only">Email</label>
            <input type="email" name="user_email" id="user_email" class="form-control" placeholder="email address" required="required">
        </div>
        <div class="form-group">
            <div class="helpers">
                <span class="helper-text">password is invalid... try again</span>
            </div>
            <label for="user_password" class="sr-only">Password</label>
            <input type="password" name="user_password" id="user_password" class="form-control" placeholder="password" required="required">
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">login</button>
        </div>
    </form>
</div>
</div>
<?php include_once 'templates/footer.php'?>