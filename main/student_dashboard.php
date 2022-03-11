<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <!--NAV BAR-->
    <nav class="sticky-top navbar">
    <img src="images/book.png" style="margin-left:48%; max-width:55px; border-radius:55px; border: 3.5px solid white; box-shadow:none; max-height: 4vw; " onclick="Location: href='index.php'" />
    <button class="btn btn-primary" onclick="location = href='account.php'" style="float:right;margin-right:10px; box-shadow:none; color:black; max-height: 4vw;" >Account</button>
    </nav>

    <!--CONTAINER-->
    <div class="container">
        <!--SEARCH BAR-->
        <div class="row" style="margin-top:7vw;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="col-md-2"></div>
        </div> 
        </div>
    </div>

    <!--COURSE LISTINGS-->
        
    <div>
    
    <?php
        include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/course_listings.php";
        populate_courses();
    ?>

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