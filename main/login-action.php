<?php


include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/login.php";
include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";

$email = $_POST["email"];
$password = $_POST["password"];

$details = list($email,$password);

$logged_in = login($email, $password);


//check if user wants to be remembered
if (isset($_POST["remember_me"]) && $_POST["remember_me"] == "Yes")
{
    setcookie("remember_me", serialize($details), time() + 60*60*24*7*4*2 ); //two months cookie
}

//if login successful as student
if ($logged_in == "student")
{
    
    session_start();
    $_SESSION['user'] = serialize($details);
    header("Location: student_dashboard.php");
    
}

//if login successful as teacher
else if ($logged_in == "teacher")
{
    
    session_start();
    $_SESSION['user'] = serialize($details);
    header("Location: teacher_dashboard.php");
    
}

//if can't log in
else
{
    session_start();
    $err = $->authenticate();   
    $_SESSION['login_err'] = $err;
    header("Location: login.php");

}

?>