<?php 
    include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-css/bootstrap.min.css" rel="stylesheet" />
    <script lang="javascript">
    
    
    function change_class(id){

        document.getElementById('addQuestion5').className = "btn btn-primary";
        document.getElementById('addQuestion10').className = "btn btn-primary";
        document.getElementById('addQuestion15').className = "btn btn-primary";
        document.getElementById('addQuestion20').className = "btn btn-primary";

        document.getElementById(id).className = "btn btn-outline-primary";
    }

    
    function add_question(loop_num){
       
        
       var mySpan = document.getElementById('mySpan');
       mySpan.innerHTML = "";

       count = 1;
       for (let i = 0; i < loop_num; i++) {
 
           var question = '<input type="hidden" name="qAmount'+loop_num+'"/><label for="q'+count+'">Q'+count+': Title</label><input type="text" placeholder="What is cat in spanish?" id="q'+count+'" name="q'+count+'" class="form-control" required/><br/><p>Please select the option with the correct answer</p><input type="radio" name="radioq'+count+'" id="radioq'+count+'option1" style="float:left; margin-right: 1vw; margin-left:1vw;" class="form-check-input" required/><input style="width:30%" type="text" placeholder="Option 1" id="q'+count+'option1" name="q'+count+'option1" class="form-control" required/><input type="radio" name="radioq'+count+'"  id="radioq'+count+'option2" style="float:left; margin-right: 1vw; margin-left:1vw;" class="form-check-input"/><input style="width:30%" type="text" placeholder="Option 2" id="q'+count+'option2" name="q'+count+'option2" class="form-control" required/><input type="radio" name="radioq'+count+'"  id="radioq'+count+'option3" style="float:left; margin-right: 1vw; margin-left:1vw;" class="form-check-input"/><input style="width:30%" type="text" placeholder="Option 3" id="q'+count+'option3" name="q'+count+'option3" class="form-control" required/><br/>';
           mySpan.innerHTML += question;
           count += 1;
       }
       
       event.preventDefault()
        }
 
    </script>
</head>
<body id="main_body">
      
    <!--NAV BAR-->
    <nav class="sticky-top navbar">
    <img src="images/book.png" style="margin-left:48.25%; max-width:55px; border-radius:55px; border: 3.5px solid white; box-shadow:none; max-height: 4vw; " onclick="Location: href='index.php'" />
    <a style="float:right; margin-right: 10px;" href="teacher_dashboard.php" class="btn btn-danger">Back</a>

    </nav>

    <div class="container min_height">

        <form id="quizForm" action="create_quiz_action.php" method="POST" style="margin:auto; width:60%; padding-top: 3vh;" >

            <h3>Create Quiz</h3>  
            <p>Number of questions</p>
            <div id="buttons">
                <button class="btn btn-outline-primary" onclick="add_question(5); change_class(this.id);" id="addQuestion5" >5</button>
                <button class="btn btn-primary" onclick="add_question(10); change_class(this.id);" id="addQuestion10" >10</button>
                <button class="btn btn-primary" onclick="add_question(15); change_class(this.id);" id="addQuestion15" >15</button>
                <button class="btn btn-primary"  onclick="add_question(20); change_class(this.id);" id="addQuestion20" >20</button><br/><br/>
            </div>
            <label for="quizName">Quiz Name</label>
            <input type="text" placeholder="e.g. Maths and stats" id="quizName" name="quizName" class="form-control" required/>
            <br/>
            <label for="quizDescription">Quiz Description</label>
            <input type="text" placeholder="This quiz will test your skills on..." id="quizDescription" name="quizDescription" class="form-control" required/><br/>
         
            <span id="mySpan">
           
            </span>
            <button type="submit" class="btn btn-primary">Create Quiz</button>
        </form>
        <br/>

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

    <script lang="javascript">add_question(5);</script>
</body>
</html>