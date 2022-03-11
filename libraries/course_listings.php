<?php

    //POPULATE COURSES

    function populate()
    {
        
        include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
        $conn = get_conn();
        $result = mysqli_query($conn, "
        
        SELECT courseName, courseDescription FROM courses

        ");

        $count = 1;

        while ($row = $result->fetch_assoc()) {
            
            echo'  
            
            <div class="card" style="width:20vw; height:15vw;">
            <h5 class="card-header">Course</h5>
            <div class="card-body">
                <h5 class="card-title">'.$row["courseName"].'</h5>
                <p class="card-text">'.$row["courseDescription"].'</p>
                <a href="COURSE LINK" class="btn btn-primary">Join Course</a>
            </div>
            </div>
            
            ';
            
            $count = $count + 1;
        }
      
  
    }

?>