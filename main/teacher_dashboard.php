<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    
    <nav class="navbar">
        <div class="d-flex" style="float:right;">
            <button class="btn btn-primary" onclick="location = href='log-out.php'" >Log out</button>
        </div>
   
    </nav>

    <!--NAVIGATION-->
    <div class="container" style="margin-left:27.5vw;">
        <div class="row">
            <div class="col-md-12">
            <button class="btn btn-primary" onclick="location = href='student_monitor.php'" style="margin:15px; width:40vw;" >Monitor Students</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <button class="btn btn-danger" onclick="location = href='create_quiz.php'" style="margin:15px;width:40vw;" >Create Quiz</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <button class="btn btn-primary" onclick="location = href='create_course.php'" style="margin:15px;width:40vw;" >Create Course</button>
            </div>
        </div>
    </div>

</body>
</html>