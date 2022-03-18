<?php 

    include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";

    function calculate_score($answers_arr){

        $score = 0;

        $loop = true;
        $i = 0;
        $x = 1;
        while ($loop){
            
            if (isset($_POST['radioq'.$x])){
                if ($_POST['radioq'.$x] == $answers_arr[$i]){$score += 1;}
            }

            else{
                $loop = false;
            }

            $i += 1;
            $x += 1;
        }

        return $score;
    }

    function store_score($score){

        mysqli_query(get_conn(), "INSERT INTO ");

    }

?>