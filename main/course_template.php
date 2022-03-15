<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <?php
        include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";
        $result =mysqli_query(get_conn(), "SELECT courseContent FROM courses WHERE courseId='".$_POST['hiddenvalue']."'");
        
        while ($row = mysqli_fetch_assoc($result))
        {
        echo $row['courseContent'];
        }
    ?>
</body>
</html>