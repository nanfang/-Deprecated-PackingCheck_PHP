<?php
include 'parse.php';

function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}

function is_blank($question){
    return (!isset($question) || trim($question)==='');
}

function login($username, $password){
    $parseUser = new parseUser;
    $parseUser->username = $username;
    $parseUser->password = $password;
    try {
        $parseUser->login();
        session_start();
        $_SESSION['username'] = $username;
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function logout(){
    session_start();
    session_destroy();
}

?>
