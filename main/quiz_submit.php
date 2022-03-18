<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Submitted</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <nav class="sticky-top navbar">
        
        <img src="images/book.png" style="margin-left:48.25%; max-width:55px; border-radius:55px; border: 3.5px solid white; box-shadow:none; max-height: 4vw; " onclick="Location: href='index.php'" />
        <a style="float:right; margin-right: 10px;" href="student_dashboard.php" class="btn btn-danger">Back</a>

    </nav>
    
    <div class="quiz_content min_height">
    
    <?php 
        include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
        $quizId = $_POST['hiddenId'];
        echo $quizId;
        
        //get answers list
        
        $answers_str = mysqli_query(get_conn(), "SELECT quizAnswers FROM quizzes WHERE quizId ='".$quizId."'")->fetch_assoc();

        $score = 0;

        $loop = true;
        $i = 1;
        while ($loop){

            if (isset($_POST['radioq'.$i])){
                if ($_POST['radioq'.$i] == $answers[$i]){$score+=1;}
            }

            else{
                $loop = false;
            }

            $i += 1;
        }

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