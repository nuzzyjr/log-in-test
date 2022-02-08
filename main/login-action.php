<?php


include_once "C:/xampp/htdocs/John/log-in-test/libraries/db.php";
include_once "C:/xampp/htdocs/John/log-in-test/libraries/user.php";

//create user object
$user = new User($conn, $_POST['email'], $_POST['password']);

$user->authenticate();

//check if user wants to be remembered
if (isset($_POST["remember_me"]) && $_POST["remember_me"] == "Yes")
{
    setcookie("remember_me", serialize($user), time() + 60*60*24*7*4*2 ); //two months cookie
}

//if login successful
if ($user->is_logged_in())
{
    session_start();
    $_SESSION['user'] = serialize($user);
    header("Location: index.php");
    
}
//if can't log in
else
{
    session_start();
    $err = $user->authenticate();   
    $_SESSION['login_err'] = $err;
    header("Location: login.php");

}

?>