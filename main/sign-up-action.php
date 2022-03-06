<?php

include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/insert.php";
include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/user.php";

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$account_type = $_POST['account_type'];

$user = new User($conn, $email, $password, $fname, $sname, $account_type);
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