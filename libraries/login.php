<?php

include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";

function check_login($email,$password){

    $email_search = "SELECT * FROM students WHERE email = '".$email."'";

    $result = mysqli_query($conn, $email_search);

    //email found in students table
    if (mysqli_num_rows($result) > 0)
    {
       
        

    }
    //email not found in students table
    else
    {
        $email_search = "SELECT * FROM teachers WHERE email = '".$email."'";

        $result = mysqli_query($conn, $email_search);
        //email found in teachers table
        if (mysqli_num_rows($result) > 0)
        {
           
        }
        //email not found in either table
        else
        {

        }
    }





?>

