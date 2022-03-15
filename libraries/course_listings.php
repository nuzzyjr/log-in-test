<?php
    include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
    //POPULATE COURSES

    function populate_courses()
    {
        
       
        $conn = get_conn();
        $result = mysqli_query($conn, "
        
        SELECT courseName, courseDescription, courseId FROM courses

        ");


        while ($row = $result->fetch_assoc()) {
            
            echo'  
            
            <div class="card" style="display:inline-block; width:20vw; height:15vw; margin:10px;">
            <h5 class="card-header">Course</h5>
            <div class="card-body">
                <h5 class="card-title">'.$row["courseName"].'</h5>
                <p class="card-text">'.$row["courseDescription"].'</p>
                <form method="POST" action="course_template.php">
                <input type="hidden" name="hiddenvalue" value="'.$row["courseId"].'"/>
                <button class="btn btn-primary" type="submit">Join Course</button>
                </form>
            </div>
            </div>
            
            ';
            
  
        }
      
  
    }

    function populate_quizzes()
    {
        
    
        $conn = get_conn();
        $result = mysqli_query($conn, "
        
        SELECT quizName, quizDescription, quizId FROM quizzes

        ");


        while ($row = $result->fetch_assoc()) {
            
            echo'  
            
            <div class="card" style="display:inline-block; width:20vw; height:15vw; margin:10px;">
            <h5 class="card-header">Quiz</h5>
            <div class="card-body">
                <h5 class="card-title">'.$row["quizName"].'</h5>
                <p class="card-text">'.$row["quizDescription"].'</p>
                <form method="POST" action="quiz_template.php">
                <input type="hidden" name="hiddenvalue" value="'.$row["quizId"].'"/>
                <button class="btn btn-primary" type="submit">Take Quiz</button>
                </form>
            </div>
            </div>
            
            ';
            
        }
      
  
    }

    function teacher_course_options(){

        $conn = get_conn();
        $result = mysqli_query($conn, "SELECT courseName
        FROM enrols
        INNER JOIN courses
        ON enrols.courseId = courses.courseId WHERE enrols.teacherId = '".get_id_teacher()."'");

        if($result->num_rows === 0){
        echo "<option value='none'>None</option>";
            
        }
        else{
            while ($row = $result->fetch_assoc()) {
            
                echo "<option value='".$row['courseName']."'>".$row['courseName']."</option>";
                
            }
        }
        
    }
    function teacher_quiz_options(){

        $conn = get_conn();
        $result = mysqli_query($conn, "SELECT quizName FROM quizzes");

        if($result->num_rows === 0){
        echo "<option value='none'>None</option>";
            
        }
        else{
            while ($row = $result->fetch_assoc()) {
            
                echo "<option value='".$row['quizName']."'>".$row['quizName']."</option>";
                
            }
        }
     
    }

    
?>