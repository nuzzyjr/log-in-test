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
    echo "Could not log in with these credentials";
}

?>