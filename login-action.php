<?php

include_once 'db.php';
include_once 'user.php';

$user = new User($conn, $_POST['email'], $_POST['password']);

$user->authenticate();

if ($user->is_logged_in())
{
    session_start();
    $_SESSION['user'] = serialize($user);

    header("Location: index.php");
}
else
{
    session_start();
    $err = $user->authenticate();   
    $_SESSION['login_err'] = $err;
    header("Location: login.php");
}

?>