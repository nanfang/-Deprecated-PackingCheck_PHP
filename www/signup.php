<?php
include 'base.php'; 
require 'inc/commons.php';
startblock('content');
$reg_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $message = '';

    if(is_blank($username) || is_blank($password) || is_blank($email)) {
        $message = "Username/Password/Email can not be empty !";
    } else {
        if(signup($username, $password, $email)){
            $reg_success = true;
        }else{
            $message = "Username/Email already used";
        }
    }
}
if ($reg_success) {
?>
<p class="text-center" style="margin-top:30px">Account Created! <a href="/login.php">Login</a></p>
<?php } else { ?>
<div class="row">
    <div class="span4 offset4">
        <div class="well">
            <legend>New to Packing Check? Sign up!</legend>
            <form accept-charset="UTF-8" action="" method="post">
                <?php if(!is_blank($message)){ ?>
                <div class="alert alert-error">
                    <a class="close" data-dismiss="alert" href="#">x</a><?=$message?>
                </div>
                <?php } ?>
                <input class="span3" name="email" placeholder="Email" type="text"> 
                <input class="span3" name="username" placeholder="Username" type="text">
                <input class="span3" name="password" placeholder="Password" type="password"> 
                <button class="btn btn-warning" type="submit">Sign up for Packing Check</button>
            </form>
        </div>
    </div>
</div>
<?php } ?>
<?php endblock() ?>
