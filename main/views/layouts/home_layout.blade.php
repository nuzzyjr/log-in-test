<?php

session_start();

//assume not logged in
$logged_in = false;

//check for log in cookie
if (isset($_COOKIE["remember_me"]))
{
    $logged_in = true;
    $_SESSION["user"] = $_COOKIE["remember_me"];
    //check if stored user is student or teacher
    if (unserialize($_SESSION["user"])[2] == "student")
    {
        header("Location: student_dashboard.php");
    }
    else
    {
        header("Location: teacher_dashboard.php");
    }
}
//if no cookie check for session user
elseif  (isset($_SESSION["user"]))
{  
    $logged_in = true;
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
  
    <!--INSERT HOMEPAGE-->
    THIS IS THE HOMEPAGE, AM NOT LOGGED IN

    <button class="btn btn-primary" onclick="location = href='login.php'" style="float:right;margin:15px;" >Log in/Sign up</button>

</body>
</html>
