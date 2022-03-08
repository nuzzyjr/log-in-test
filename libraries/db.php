<?php

function get_conn(){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "GibJohn";   

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ("Could not connect to database.");
    return $conn;
}


?>