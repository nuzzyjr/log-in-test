<?php

include_once 'insert.php';
include_once 'user.php';
include_once 'db.php';


$email = $_POST['email'];
$password = $_POST['password'];

$user = new User($conn, $email, $password);

insert($conn, $user);
?>