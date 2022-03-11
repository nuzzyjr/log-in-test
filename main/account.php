<?php 
    include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
      
    <!--NAV BAR-->
    <nav class="sticky-top navbar">
    <img src="images/book.png" style="margin-left:48.25%; max-width:55px; border-radius:55px; border: 3.5px solid white; box-shadow:none; max-height: 4vw; " onclick="Location: href='index.php'" />

    </nav>

    
    <div class="contain_me">
    <!--LEFT SIDE-->
    <div class="left-side">
    <p>My Reward Points: <?php get_reward_points(); ?></p>
    
    <p>My Courses:
    <div class="accountbox" style="box-shadow: -2px 2px 1px gray; border: 3px solid gray; border-radius:5px; padding:10px;">
    <?php get_courses(); ?>
    </div>
    <p>My Quiz Results:
    <div class="accountbox" style="box-shadow: -2px 2px 1px gray; border: 3px solid gray; border-radius:5px; padding:10px;">
    <?php get_quizzes(); ?>
    </div>
    </p>
    </div>
    
    
    <!--RIGHT SIDE-->
    <div class="right-side">
        <a href="student_dashboard.php" style="float:right; margin:15px;" class="btn btn-danger">Back</a>
        <p style="margin-top: 5vw; ">
        My Details
        <div class="accountbox" style="box-shadow: -2px 2px 1px gray; border: 3px solid gray; border-radius:5px; padding:10px;">
        <?php my_details(); ?>
        </div></p>
    </div>
    </div>


    <!--FOOTER-->
    <footer>
    <div class="row section " style="margin:0px;">
        <div class="col-md-12 footer" style="margin:0;" >
        <p style="color:white;"></br>Find us at:</br>
        Instagram: @GibJohn</br>
        Facebook: @GibJohn</br>
        Email: gibjohn@gmail.com</br>
        Phone: 07473820938
        </p>
        </div>
    </div>
    </footer>
</body>
</html>