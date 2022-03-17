<?php
include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";

$quizName = $_POST['quizName'];
$quizDescription = $_POST['quizDescription'];

if (isset($_POST['qAmount5'])){
    $loop_num = 5;
}
elseif (isset($_POST['qAmount10'])){
    $loop_num = 10;
}
elseif (isset($_POST['qAmount15'])){
    $loop_num = 15;
}
else{
    $loop_num = 20;
}



$quizContent = "";

for ($i = 1; $i <= $loop_num; $i++){

    $qname = $_POST['q'.strval($i)];

    $qname = '<p>'.'Q'.strval($i).': '.$qname.'</p>';

    $option1 = $_POST['q'.strval($i).'option1'];
    $option2 = $_POST['q'.strval($i).'option2'];
    $option3 = $_POST['q'.strval($i).'option3'];

    $quizContent = $quizContent.
    
    $qname.
    '
    <p>
    <input type="radio" class="form-check-input" name="radioq'.strval($i).'" id="q'.strval($i).'option1" value="'.$option1.'" required /> '.$option1.'

    <input type="radio" class="form-check-input" name="radioq'.strval($i).'" id="q'.strval($i).'option2" value="'.$option2.'" /> '.$option2.'

    <input type="radio" class="form-check-input" name="radioq'.strval($i).'" id="q'.strval($i).'option3" value="'.$option3.'" /> '.$option3.'

    </p>';
}


$sql = "INSERT INTO quizzes (quizName, quizDescription, quizContent) VALUES ('".$quizName."','".$quizDescription."','".$quizContent."') ";
$conn = get_conn();

mysqli_query($conn, $sql);


?>