<?php

include_once "C:/xampp/htdocs/Projects/log-in-test/libraries/insert.php";
include_once "C:/xampp/htdocs/Projects/log-in-test/libraries/db.php";
include_once "C:/xampp/htdocs/Projects/log-in-test/libraries/user.php";

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