<?php
require 'inc/commons.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $message = '';
    $success = true;
    if(is_blank($username) || is_blank($password)) {
        $message = "Username/password can not be empty !";
        $success = false;
    } else if(!login($username, $password)){
        $message = "Invalid username or password !";
        $success = false;
    }

    if($success){
        redirect('/');
    }

}?>
<?php include 'base.php' ?>
<?php startblock('content') ?>
<div class="row">
    <div class="span4 offset4">
    <div class="well">
        <legend>Log In</legend>
        <form method="POST" action="" accept-charset="UTF-8">
            <?php if(!is_blank($message)){ ?>
            <div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">x</a><?=$message?>
            </div>
            <?php } ?>
            <input class="span3" placeholder="Username" type="text" name="username" value="<?=$username?>">
            <input class="span3" placeholder="Password" type="password" name="password"> 
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"> Remember Me
            </label>
            <button class="btn-info btn" type="submit">Login</button>
            <a class="btn btn-warning" href="/signup.php">Create an Account</a>
        </form>    
    </div>
    </div>
</div>
<?php endblock() ?>

