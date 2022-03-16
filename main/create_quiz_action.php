<?php

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

    $qNum = 'q'.strval($i);
    $qname = $_POST[$qNum];

    $qname = '<p>'.$qNum.': '.$qname.'</p>';

    $option1 = '<p>'.$_POST['q'.strval($i).'option1'].'</p>';
    $option2 = '<p>'.$_POST['q'.strval($i).'option2'].'</p>';
    $option3 = '<p>'.$_POST['q'.strval($i).'option3'].'</p><br/>';

    $quizContent = $quizContent.$qname.$option1.$option2.$option3;

}


echo $quizContent;

?>