<?php

include_once "db.php";
include_once "user.php";

session_start();

//assume not logged in
$logged_in = false;

//check for log in cookie
if (isset($_COOKIE["remember_me"]))
{
    $logged_in = true;
    $user = unserialize($_COOKIE["remember_me"]);
}
//if no cookie check for session user
elseif  (isset($_SESSION["user"]))
{  
    $logged_in = true;
    $user = unserialize($_SESSION["user"]); 
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php if ($logged_in): ?>
    <button class="btn btn-primary" onclick="location = href='log-out.php'">Log out</button>
    <?php else: ?>
    <button class="btn btn-primary" onclick="location = href='sign-up.php'">Sign Up</button>
    <button class="btn btn-primary" onclick="location = href='login.php'">Login</button>
    <?php endif ?>
</body>
</html>