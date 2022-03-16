<?php
    include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";

    function create_card($name, $description, $id, $type){


        if ($type ==  'Quiz'){
            $button_name = 'Take quiz';
        }
        else{
            $button_name = 'Join Course';
        }

        echo'  
        <div class="card" style="display:inline-block; width:20vw; height:15vw; margin:10px;">
        <h5 class="card-header">'.$type.'</h5>
        <div class="card-body">
            <h5 class="card-title">'.$name.'</h5>
            <p class="card-text">'.$description.'</p>
            <form method="POST" action="course_template.php">
            <input type="hidden" name="hiddenvalue" value="'.$id.'"/>
            <button class="btn btn-primary" type="submit">'.$button_name.'</button>
            </form>
        </div>
        </div>';
    }

    function populate_courses()
    {
        
       
        $conn = get_conn();
        $result = mysqli_query($conn, "
        
        SELECT courseName, courseDescription, courseId FROM courses

        ");


        while ($row = $result->fetch_assoc()) {
            
            create_card($row['courseName'], $row['courseDescription'], $row['courseId'], 'Course');
  
        }
      
  
    }

    function populate_quizzes()
    {
        
    
        $conn = get_conn();
        $result = mysqli_query($conn, "
        
        SELECT quizName, quizDescription, quizId FROM quizzes

        ");


        while ($row = $result->fetch_assoc()) {
            
            create_card($row['quizName'], $row['quizDescription'], $row['quizId'], 'Quiz');
            
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
            
                echo "<option name='courseOption' value='".$row['courseName']."' id='courseName' >".$row['courseName']."</option>";
                
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
            
                echo "<option  name='quizOption' value='".$row['quizName']." id='quizName'>".$row['quizName']."</option>";
                
            }
        }
     
    }

    function searchbar($search_criteria){

        $conn = get_conn();
        $resultcourses = mysqli_query($conn, "SELECT courseName, courseDescription, courseId FROM courses WHERE courseName LIKE '%".$search_criteria."%'");
        $resultquizzes = mysqli_query($conn, "SELECT quizName, quizDescription, quizId FROM quizzes WHERE quizName LIKE '%".$search_criteria."%'");

        
        while ($row = $resultcourses->fetch_assoc()) {
            
            create_card($row['courseName'], $row['courseDescription'], $row['courseId'], 'Course');
            
        }
        while ($row = $resultquizzes->fetch_assoc()) {
            
            create_card($row['quizName'], $row['quizDescription'], $row['quizId'], 'Quiz');
            
        }
    }

    function course_table($selected){

        echo '<tr><td>awdoiajwodinawoidnawdoiawdnionwoid </td></tr>';
        
    }

    
?>