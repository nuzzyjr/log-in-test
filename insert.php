<?php
   function insert($conn, $user)
   {
       //does email already exist in DB?
       $sql = "
       INSERT INTO users(
           email,
           password,
           token,
           is_active
           ) VALUES (
           
           '{$user->email}',
           '{$user->password_hash}',
           '{$user->token}',
           '0'
           )
       ";

       //create mysql query 
       $sqlQuery = mysqli_query($conn, $sql);

       if (!$sqlQuery)
       {
           die ("MySQL query failed!" . mysqli_error($conn));
       }
   }
?>