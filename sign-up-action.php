<?php

include_once 'insert.php';
include_once 'user.php';
include_once 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = new User($conn, $email, $password);
//insert user into db
if (insert($conn, $user)[0])
{
    session_start();
    $_SESSION['user'] = serialize($user);

    header("Location: index.php");
}
else
{   
    //inserting failed...
    $err = insert($conn, $user)[1];
    session_start();
    $_SESSION['sign_up_err'] = $err;
    header("Location: sign-up.php");
}

?>