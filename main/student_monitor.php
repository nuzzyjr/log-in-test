<?php 
    include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
    include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/course_listings.php";
    $currentId = '';

    function change_id(){
        $currentId = '2';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Monitor</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script lang="javascript">
      
        if ( window.history.replaceState ) {
           window.history.replaceState( null, null, window.location.href );
        }
     

    </script>

</head>
<body>
      
    <!--NAV BAR-->
    <nav class="sticky-top navbar">
    <img src="images/book.png" style="margin-left:48.25%; max-width:55px; border-radius:55px; border: 3.5px solid white; box-shadow:none; max-height: 4vw; " onclick="Location: href='index.php'" />
    <a style="float:right; margin-right: 10px;" href="teacher_dashboard.php" class="btn btn-danger">Back</a>
    </nav>

    
    <div class="contain_me min_height">
    <!--LEFT SIDE-->
    <div class="left-side">
    <h4>My courses</h4>
    <form method="post" action="#">
    <select onchange="<?php change_id();?>" class="form-select" id="myselect" style="width:25vw;" >
    <?php teacher_course_options(); ?>
    </select>
    </form>

    <span id="mycourses">
       <?php course_table($currentId); ?>
    </span>
    
    </div>
    
    
    <!--RIGHT SIDE-->
    <div class="right-side">
    <h4>Quiz Results</h4>
    <form method="post" action="#">
    <select onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' class="form-select"  style="width:25vw;" >
    <?php teacher_quiz_options(); ?>
    </select>
    </form>

    <table class="table" style="width: 30vw;">
        
    </table>   
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